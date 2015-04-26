var app = angular.module('UserApp', ['ui.router', 'ngResource', 'ngMessages', 'ui.bootstrap']);
app.config(function ($stateProvider, $urlRouterProvider) {

    // For any unmatched url, redirect to /state1

    $stateProvider
        .state('list', {
            url: "/list",
            templateUrl: "/app/admin/user/list.html",
            controller: "ListCtrl",
            resolve: {
                user: function (UserService, $stateParams) {
                    return UserService.list(1,"");
                }
            }
        })

        .state('create', {
            url: "/create",
            templateUrl: "/app/admin/user/form.html",
            controller : "FormCtrl",
            resolve : {
                user : function(UserService, $stateParams) {
                    return {data : {} };
                },
                roles : function(RoleService) {
                    return RoleService.all();
                }
            }
        })

        .state('edit',{
            url : "/edit/:id",
            templateUrl : "/app/admin/user/form.html",
            controller : "FormCtrl",
            resolve : {
                user : function(UserService, $stateParams) {
                    return UserService.edit($stateParams.id);
                },
                roles : function(RoleService) {
                    return RoleService.all();
                }
            }
        });

    $urlRouterProvider.otherwise("/list");

});

var UserController = function() {
    var model = this;

    model.message = "";

    model.user = {
        username: "",
        password: "",
        repassword: ""
    };

    model.submit = function(isValid) {
        console.log("h");
        if (isValid) {
            model.message = "Submitted " + model.user.username;
        } else {
            model.message = "There are still invalid fields below";
        }
    };

};

var compareTo = function() {
    return {
        require : "ngModel",
        scope : {
            otherModelValue : "=compareTo"
        },
        link : function(scope, element, attributes, ngModel) {
            ngModel.$validators.compareTo = function(modelValue) {
                return modelValue == scope.otherModelValue;
            };

            scope.$watch("otherModelValue", function() {
                ngModel.$validate();
            });
        }
    };
};

app.directive("compareTo", compareTo);
app.controller("UserController", UserController);