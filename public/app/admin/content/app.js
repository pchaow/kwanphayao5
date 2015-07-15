/**
 * Created by chaow on 4/7/2015.
 */


var app = angular.module('ContentAdmin', ['ui.router','ngCookies','ui.tinymce',
    'AppConfig','angularify.semantic', 'flow', 'Content','Category']);

app.config(function ($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise("/");

    $stateProvider
        .state('home', {
            url: "/",
            templateUrl: "/app/admin/content/_home.html",
            controller: "HomeCtrl",
            controllerAs : 'self',
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
            controllerAs : 'self',
            resolve: {
                content: function (CategoryService) {
                    return {data: { }}
                },
                categories : function (CategoryService){
                    return CategoryService.all("?children=true")
                }
            }
        })
        .state('edit', {
            url: "/edit/:id",
            templateUrl: "/app/admin/content/_edit.html",
            controller: "EditCtrl",
            controllerAs : 'self',
            resolve: {
                content: function (ContentService,$stateParams) {
                    return ContentService.get($stateParams.id);
                }
                ,
                categories : function (CategoryService){
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
                .success(function(response){
                    self.closeDeleteModal();
                    for(var i=0;i<self.contents.length;i++){
                        if(self.contents[i].id == content.id){
                            self.contents.splice(i,1);
                            break;
                        }
                    }
                })
        } else {
            self.closeDeleteModal();
        }

    }
});

app.controller("AddCtrl", function ($scope, $state,
                                    ContentService,
                                    content, categories) {
    console.log("AddCtrl Start...");
    var self = this;
    self.content = content.data;
    self.categories = categories.data;


    $scope.save = function () {
        ContentService.store(self.content).success(function (resposne) {
            $state.go('home');
            //$state.go("edit",{id:resposne.id});
        }).error(function (response) {
            $scope.message = response;
        });
    }

    $('.ui.dropdown').dropdown();

    self.mceOptions = {
        inline: false,
        content_css: ['/components/semantic-ui/dist/semantic.min.css','/css/kweditor.css'],
        plugins: "tinyflow image hr table",
        skin: 'lightgray',
        theme: 'modern',
        relative_urls: false,
        height: 400,
        menubar: true,
        toolbar1: "undo redo | formatselect fontselect fontsizeselect removeformat  | bold italic | alignleft  aligncenter alignright alignjustify | ",
        toolbar2:"bullist numlist outdent indent | table | hr | link unlink | image tinyflow |"
    } ;

});

app.controller("EditCtrl", function ($scope, $state,
                                     ContentService,
                                     content, categories) {
    console.log("EditCtrl Start...");

    var self = this;
    self.content = content.data;
    self.categories = categories.data;



    $('.ui.dropdown').dropdown();

    $scope.save = function () {
        ContentService.save(self.content).success(function (resposne) {
            $state.go('home');
            //$state.go("edit",{id:resposne.id});
        }).error(function (response) {
            $scope.message = response;
        });
    }

    self.mceOptions = {
        inline: false,
        content_css: ['/components/semantic-ui/dist/semantic.min.css','/css/kweditor.css'],
        plugins: "tinyflow image hr table",
        skin: 'lightgray',
        theme: 'modern',
        relative_urls: false,
        height: 400,
        menubar: true,
        toolbar1: "undo redo | formatselect fontselect fontsizeselect removeformat  | bold italic | alignleft  aligncenter alignright alignjustify | ",
        toolbar2:"bullist numlist outdent indent | table | hr | link unlink | image tinyflow |"
    } ;
});