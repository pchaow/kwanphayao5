var app = angular.module('RoleApp', ['ui.router', 'ngResource', 'ui.bootstrap']);
app.config(function($stateProvider, $urlRouterProvider) {

    // For any unmatched url, redirect to /state1

    $stateProvider
        .state('list', {
            url : "/list",
            templateUrl : "/app/admin/role/list.html",
            controller : "ListCtrl",
            resolve : {
                roles : function(RoleService, $stateParams) {
                    return RoleService.list(1,"");
                }
            }
        })

        .state('create', {
            url : "/create",
            templateUrl : "/app/admin/role/form.html",
            controller : "FormCtrl",
            resolve : {
                role : function(RoleService, $stateParams) {
                    return { data : {} };
                }
            }
        })

        .state('edit', {
            url : "/edit/:id",
            templateUrl : "/app/admin/role/form.html",
            controller : "FormCtrl",
            resolve : {
                role : function(RoleService, $stateParams) {
                    return RoleService.edit($stateParams.id);
                }
            }
        });

    $urlRouterProvider.otherwise("/list");

});