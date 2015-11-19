/**
 * Created by chaow on 4/7/2015.
 */


var app = angular.module('ContentAdmin', ['ui.router', 'ngCookies', 'ui.tinymce',
    'AppConfig', 'angularify.semantic', 'flow', 'Content', 'Category']);

app.config(function ($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise("/");

    $stateProvider
        .state('home', {
            url: "/",
            templateUrl: "/app/admin/content/_home.html",
            controller: "HomeCtrl",
            controllerAs: 'self',
            resolve: {
                contents: function (ContentService) {
                    return ContentService.all();
                }
            }
        })
        .state('add', {
            url: "/add",
            templateUrl: "/app/admin/content/_add.html",
            controller: "AddCtrl",
            controllerAs: 'self',
            resolve: {
                content: function (CategoryService) {
                    return {
                        data: {
                            title: 'หัวเรื่อง',
                            content: 'เนื้อหา',
                            references: []
                        }
                    }
                },
                categories: function (CategoryService) {
                    return CategoryService.all("?children=true")
                }
            }
        })
        .state('edit', {
            url: "/edit/:id",
            templateUrl: "/app/admin/content/_edit.html",
            controller: "EditCtrl",
            controllerAs: 'self',
            resolve: {
                content: function (ContentService, $stateParams) {
                    return ContentService.get($stateParams.id);
                }
                ,
                categories: function (CategoryService) {
                    return CategoryService.all("?children=true");
                }
            }
        })
});

app.controller("HomeCtrl", function ($scope, $state,
                                     ContentService,
                                     contents) {
    console.log("HomeCtrl Start...");
    var self = this;

    self.contents = contents.data;

    self.delete_modal = false;
    self.showDeleteModal = function (content) {
        self.content = content;
        self.delete_modal = true;
    }

    self.closeDeleteModal = function () {
        self.delete_modal = false;
    }

    self.ajaxDelete = function (content, bool) {
        self.content = content;
        if (bool) {
            ContentService.delete(content)
                .success(function (response) {
                    self.closeDeleteModal();
                    for (var i = 0; i < self.contents.length; i++) {
                        if (self.contents[i].id == content.id) {
                            self.contents.splice(i, 1);
                            break;
                        }
                    }
                })
        } else {
            self.closeDeleteModal();
        }

    }
});

var mceOptions = {
    inline: false,
    content_css: ['/components/semantic/dist/semantic.min.css', '/css/kweditor.css'],
    plugins: "tinyflow image hr table",
    skin: 'lightgray',
    inline: true,
    theme: 'modern',
    relative_urls: false,
    height: 400,
    menubar: true,
    toolbar1: "undo redo | formatselect fontselect fontsizeselect removeformat  | bold italic | alignleft  aligncenter alignright alignjustify | ",
    toolbar2: "bullist numlist outdent indent | table | hr | link unlink | image tinyflow |"
};

var mceOptionsTitle = {
    inline: false,
    content_css: ['/components/semantic/dist/semantic.min.css', '/css/kweditor.css'],
    inline: true,
    plugins: "tinyflow image hr table",
    skin: 'lightgray',
    theme: 'modern',
    relative_urls: false,
    toolbar: "undo redo",
    menubar: false
};

self.getShortTextRef = function (reference) {
    return $sce.trustAsHtml(reference.short_text);
}


app.controller("AddCtrl", function ($scope, $state, $timeout, $sce, $cookies,
                                    ContentService,
                                    content, categories) {
    console.log("AddCtrl Start...");
    var self = this;
    self.content = content.data;
    var cookies = $cookies['XSRF-TOKEN'];
    self.categories = categories.data;

    self.upload = new Flow({
        //target: '/api/content/' + self.content.id + '/cover',
        singleFile: true,
        method: 'post',
        testChunks: false,
        headers: function (file, chunk, isTest) {
            return {
                'X-XSRF-TOKEN': cookies// call func for getting a cookie
            }
        }
    });


    self.upload.on('complete', function () {
        $state.go('home');
    })

    $scope.save = function () {
        ContentService.store(self.content).success(function (response) {
            self.upload.opts.target = '/api/content/' + response.id + '/cover';
            self.upload.upload();
        }).error(function (response) {
            $scope.message = response;

            // do upload file

        });
    }
    $timeout(function () {
        $('.ui.dropdown').dropdown();
        $('#ref_dropdown')
            .dropdown({
                apiSettings: {
                    url: '/api/search/reference/{query}',
                    onResponse: function (response) {
                        self.ref_dropdown_response = response;
                    }
                },
                onChange: function (value, text, $choice) {
                    var results = self.ref_dropdown_response.results;
                    if (!self.content.bibliographies) {
                        self.content.bibliographies = [];
                    }
                    for (i = 0; i < results.length; i++) {
                        if (value == results[i].object.id) {
                            var hasref = false;
                            for (j = 0; j < self.content.bibliographies.length; j++) {
                                if (value == self.content.bibliographies[j].id) {
                                    hasref = true;
                                }
                            }
                            if (!hasref) {
                                var obj = results[i].object;
                                self.addReference(obj);

                            }

                        }
                    }
                    console.log(self.content.bibliographies);
                    self.content.i = 0;
                }
            })
        ;
    }, 100)

    self.addReference = function (ref) {
        //ref.short_text = $sce.trustAsHtml(ref.short_text);
        self.content.bibliographies.push(ref);
        $scope.$apply();
    }

    self.removeRef = function (reference) {
        for (i = 0; i < self.content.bibliographies.length; i++) {
            if (reference.id == self.content.bibliographies[i].id) {
                self.content.bibliographies.splice(i, 1);
            }
        }
    }

    self.mceOptions = mceOptions
    self.mceOptionsTitle = mceOptionsTitle

    self.getShortTextRef = function (reference) {
        return $sce.trustAsHtml(reference.short_text);
    }


});

app.controller("EditCtrl", function ($scope, $state, $timeout, $sce,$cookies,
                                     ContentService,
                                     content, categories) {
    console.log("EditCtrl Start...");
    var cookies = $cookies['XSRF-TOKEN'];
    var self = this;
    self.content = content.data;
    self.categories = categories.data;

    self.upload = new Flow({
        //target: '/api/content/' + self.content.id + '/cover',
        singleFile: true,
        method: 'post',
        testChunks: false,
        headers: function (file, chunk, isTest) {
            return {
                'X-XSRF-TOKEN': cookies// call func for getting a cookie
            }
        }
    });

    self.removeCover = function(){

        ContentService.removeCover(self.content).success(function(response){
          self.content = response;
        })
    }

    self.upload.on('complete', function () {
        $state.go('home');
    })

    self.getShortTextRef = function (reference) {
        return $sce.trustAsHtml(reference.short_text);
    }

    $timeout(function () {
        $('.ui.dropdown').dropdown();
        $('#ref_dropdown')
            .dropdown({
                apiSettings: {
                    url: '/api/search/reference/{query}',
                    onResponse: function (response) {
                        self.ref_dropdown_response = response;
                    }
                },
                onChange: function (value, text, $choice) {
                    var results = self.ref_dropdown_response.results;
                    if (!self.content.bibliographies) {
                        self.content.bibliographies = [];
                    }
                    for (i = 0; i < results.length; i++) {
                        if (value == results[i].object.id) {
                            var hasref = false;
                            for (j = 0; j < self.content.bibliographies.length; j++) {
                                if (value == self.content.bibliographies[j].id) {
                                    hasref = true;
                                }
                            }
                            if (!hasref) {
                                var obj = results[i].object;
                                self.addReference(obj);

                            }

                        }
                    }
                    console.log(self.content.bibliographies);
                    self.content.i = 0;
                }
            })
        ;
    }, 100);

    self.removeRef = function (reference) {
        for (i = 0; i < self.content.bibliographies.length; i++) {
            if (reference.id == self.content.bibliographies[i].id) {
                self.content.bibliographies.splice(i, 1);
            }
        }
    }

    self.addReference = function (ref) {
        //ref.short_text = $sce.trustAsHtml(ref.short_text);
        self.content.bibliographies.push(ref);
        $scope.$apply();
    };

    $scope.save = function () {
        ContentService.save(self.content).success(function (response) {
            self.upload.opts.target = '/api/content/' + response.id + '/cover';
            self.upload.upload();
        }).error(function (response) {
            $scope.message = response;
        });
    }

    self.mceOptions = mceOptions;
    self.mceOptionsTitle = mceOptionsTitle;
});