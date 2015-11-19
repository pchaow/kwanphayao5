/**
 * Created by chaow on 4/7/2015.
 */


var app = angular.module('PageAdmin', ['ui.router', 'ngCookies', 'ui.tinymce',
    'AppConfig', 'angularify.semantic', 'Page']);

app.config(function ($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise("/");

    $stateProvider
        .state('home', {
            url: "/",
            templateUrl: "/app/admin/page/_home.html",
            controller: "HomeCtrl",
            controllerAs: 'self',
            resolve: {
                pages: function (PageService) {
                    return PageService.all();
                }
            }
        })
        .state('add', {
            url: "/add",
            templateUrl: "/app/admin/page/_add.html",
            controller: "AddCtrl",
            controllerAs: 'self',
            resolve: {
                page: function () {
                    return {
                        data: {
                            title: 'หัวเรื่อง',
                            page: 'เนื้อหา',
                            references: []
                        }
                    }
                }
            }
        })
        .state('edit', {
            url: "/edit/:id",
            templateUrl: "/app/admin/page/_edit.html",
            controller: "EditCtrl",
            controllerAs: 'self',
            resolve: {
                page: function (PageService, $stateParams) {
                    return PageService.get($stateParams.id);
                }
            }
        })
});

app.controller("HomeCtrl", function ($scope, $state,
                                     PageService,
                                     pages) {
    console.log("HomeCtrl Start...");
    var self = this;

    self.pages = pages.data;

    self.delete_modal = false;
    self.showDeleteModal = function (page) {
        self.page = page;
        self.delete_modal = true;
    }

    self.closeDeleteModal = function () {
        self.delete_modal = false;
    }

    self.ajaxDelete = function (page, bool) {
        self.page = page;
        if (bool) {
            PageService.delete(page)
                .success(function (response) {
                    self.closeDeleteModal();
                    for (var i = 0; i < self.pages.length; i++) {
                        if (self.pages[i].id == page.id) {
                            self.pages.splice(i, 1);
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
    page_css: ['/components/semantic/dist/semantic.min.css', '/css/kweditor.css'],
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
    page_css: ['/components/semantic/dist/semantic.min.css', '/css/kweditor.css'],
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
                                    PageService,
                                    page) {
    console.log("AddCtrl Start...");
    var self = this;
    self.page = page.data;
    var cookies = $cookies['XSRF-TOKEN'];

    $scope.save = function () {
        PageService.store(self.page).success(function (response) {
            $state.go("home");
        }).error(function (response) {
            $scope.message = response;

            // do upload file

        });
    }

    self.mceOptions = mceOptions
    self.mceOptionsTitle = mceOptionsTitle

});

app.controller("EditCtrl", function ($scope, $state, $timeout, $sce,$cookies,
                                     PageService,
                                     page, categories) {
    console.log("EditCtrl Start...");
    var cookies = $cookies['XSRF-TOKEN'];
    var self = this;
    self.page = page.data;
    self.categories = categories.data;

    self.upload = new Flow({
        //target: '/api/page/' + self.page.id + '/cover',
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

        PageService.removeCover(self.page).success(function(response){
          self.page = response;
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
                    if (!self.page.bibliographies) {
                        self.page.bibliographies = [];
                    }
                    for (i = 0; i < results.length; i++) {
                        if (value == results[i].object.id) {
                            var hasref = false;
                            for (j = 0; j < self.page.bibliographies.length; j++) {
                                if (value == self.page.bibliographies[j].id) {
                                    hasref = true;
                                }
                            }
                            if (!hasref) {
                                var obj = results[i].object;
                                self.addReference(obj);

                            }

                        }
                    }
                    console.log(self.page.bibliographies);
                    self.page.i = 0;
                }
            })
        ;
    }, 100);

    self.removeRef = function (reference) {
        for (i = 0; i < self.page.bibliographies.length; i++) {
            if (reference.id == self.page.bibliographies[i].id) {
                self.page.bibliographies.splice(i, 1);
            }
        }
    }

    self.addReference = function (ref) {
        //ref.short_text = $sce.trustAsHtml(ref.short_text);
        self.page.bibliographies.push(ref);
        $scope.$apply();
    };

    $scope.save = function () {
        PageService.save(self.page).success(function (response) {
            self.upload.opts.target = '/api/page/' + response.id + '/cover';
            self.upload.upload();
        }).error(function (response) {
            $scope.message = response;
        });
    }

    self.mceOptions = mceOptions;
    self.mceOptionsTitle = mceOptionsTitle;
});