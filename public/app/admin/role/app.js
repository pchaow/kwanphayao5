/**
 * Created by chaow on 4/7/2015.
 */

var app = angular.module('RoleAdmin', ['ui.router','AppConfig','angularify.semantic', 'flow', 'Role']);

app.config(function ($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise("/");

    $stateProvider
        .state('home', {
            url: "/",
            templateUrl: "/app/admin/role/_home.html",
            controller: "HomeCtrl",
            resolve: {
                roles: function (RoleService) {
                    return RoleService.all();
                }
            }
        })
});

app.controller("HomeCtrl", function ($scope, $state, roles) {
    console.log("HomeCtrl Start...");

    $scope.roles = roles.data;

});
