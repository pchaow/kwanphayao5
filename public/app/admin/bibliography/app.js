/**
 * Created by chaow on 4/7/2015.
 */


var app = angular.module('app', ['ui.router','ngCookies','ui.tinymce',
    'AppConfig','angularify.semantic', 'flow', 'Bibliography']);

app.config(function ($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise("/");

    $stateProvider
        .state('home', {
            url: "/",
            templateUrl: "/app/admin/bibliography/_home.html",
            controller: "HomeCtrl",
            controllerAs : 'self',
            resolve: {
                bibliographies: function (BibliographyService) {
                    return BibliographyService.all();
                }
            }
        })
        .state('add', {
            url: "/add",
            templateUrl: "/app/admin/bibliography/_add.html",
            controller: "AddCtrl",
            controllerAs : 'self',
            resolve: {
                bibliography : function (BibliographyService){
                    return { data : {} }
                }
            }
        })
        .state('edit', {
            url: "/edit/:id",
            templateUrl: "/app/admin/bibliography/_edit.html",
            controller: "EditCtrl",
            controllerAs : 'self',
            resolve: {
                bibliography : function (BibliographyService,$stateParams){
                    return BibliographyService.get($stateParams.id);
                }
            }
        })
});

app.controller("HomeCtrl", function ($scope, $state,$sce
                                     ,BibliographyService
                                     ,bibliographies) {
    console.log("HomeCtrl Start...");
    var self = this;

    self.bibliographies = bibliographies.data;

    self.delete_modal = false;
    self.showDeleteModal = function (bibliography) {
        self.bibliography = bibliography;
        self.delete_modal = true;
    }

    self.getShortText = getShortText;

    self.closeDeleteModal = function () {
        self.delete_modal = false;
    }

    self.ajaxDelete = function (bibliography, bool) {
        self.bibliography = bibliography;
        if (bool) {
            BibliographyService.delete(bibliography)
                .success(function(response){
                    self.closeDeleteModal();
                    for(var i=0;i<self.bibliographies.length;i++){
                        if(self.bibliographies[i].id == bibliography.id){
                            self.bibliographies.splice(i,1);
                            break;
                        }
                    }
                })
        } else {
            self.closeDeleteModal();
        }

    }

    function getShortText(bibliography){
        return $sce.trustAsHtml(bibliography.short_text);
    }
});

app.controller("AddCtrl", function ($scope, $state,
                                    BibliographyService,
                                    bibliography ) {
    console.log("AddCtrl Start...");
    var self = this;
    self.bibliography = bibliography.data;


    $scope.save = function () {
        BibliographyService.store(self.bibliography).success(function (resposne) {
            $state.go('home');
            //$state.go("edit",{id:resposne.id});
        }).error(function (response) {
            $scope.message = response;
        });
    }

});

app.controller("EditCtrl", function ($scope, $state,
                                     BibliographyService,
                                     bibliography) {
    console.log("EditCtrl Start...");

    var self = this;
    self.bibliography = bibliography.data;

    $scope.save = function () {
        BibliographyService.save(self.bibliography).success(function (resposne) {
            $state.go('home');
            //$state.go("edit",{id:resposne.id});
        }).error(function (response) {
            $scope.message = response;
        });
    }
});