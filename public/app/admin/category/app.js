/**
 * Created by chaow on 2/3/2015 AD.
 */
var app = angular.module('CategoryAdmin', ['ui.router','AppConfig','angularify.semantic', 'flow', 'Category']);

app.config(function ($stateProvider, $urlRouterProvider) {
    //
    // For any unmatched url, redirect to /state1

    $stateProvider
        .state('home', {
            url: "/",
            templateUrl: "/app/admin/category/_home.html",
            controller: "HomeCtrl",
            resolve: {
                categories: function (CategoryService) {
                    return CategoryService.all("?children=true");
                }
            }
        })
        .state('sub', {
            url: "/add-sub/:id",
            templateUrl: "/app/admin/category/_sub.html",
            controller: "AddSubCtrl",
            resolve: {
                category: function () {
                    return {data: { parent : {}}}
                },
                parent: function (CategoryService,$stateParams) {
                    return CategoryService.get($stateParams.id);
                }
            }
        })
        .state('add', {
            url: "/add",
            templateUrl: "/app/admin/category/_add.html",
            controller: "AddCtrl",
            resolve: {
                category: function () {
                    return {data: { parent : {}}}
                }
            }
        })
        .state('edit', {
            url: "/edit/:id",
            templateUrl: "/app/admin/category/_edit.html",
            controller: "EditCtrl",
            resolve: {
                category: function (CategoryService,$stateParams) {
                    return CategoryService.get($stateParams.id);
                }
            }

        })


    $urlRouterProvider.otherwise("/");


});

app.controller("HomeCtrl",function($scope, CategoryService, categories){
    console.log("HomeCtrl Start...");
    $scope.categories = categories.data;
    $scope.show = [];

    $scope.delete_modal = false;
    $scope.showDeleteModal = function (category) {
        $scope.category = category;
        $scope.delete_modal = true;
    }

    $scope.closeDeleteModal = function () {
        $scope.delete_modal = false;
    }

    $scope.ajaxDelete = function (category, bool) {
        $scope.category = category;
        if (bool) {
            CategoryService.delete(category).success(function (response) {
                $scope.closeDeleteModal();
                CategoryService.all().success(function (response) {
                    $scope.categories = response;
                })
            });
        } else {
            $scope.closeDeleteModal();
        }
    }


    $scope.test = function(id){
        if ($scope.show[id]) {
            $scope.show[id] = false;
        }else {
            $scope.show[id] = true;
        }
        console.log($scope.show[id]);
        console.log(id);

    }
})

app.controller("AddCtrl",function($scope, $state, CategoryService, category){
    console.log("AddCtrl Start...");

    $scope.category = category

    $scope.save = function () {
        CategoryService.store($scope.category).success(function (resposne) {
            $state.go('home');
        }).error(function (response) {
            $scope.message = response;
        });
    }
})

app.controller("AddSubCtrl",function($scope, $state, SubCategoryService,category, parent){
    console.log("AddSubCtrl Start...");

    $scope.parent = parent.data;
    $scope.category = category;

    $scope.save = function () {
        SubCategoryService.store($scope.parent.id,$scope.category).success(function (resposne) {
            $state.go('home');
        }).error(function (response) {
            $scope.message = response;
        });
    }
})

app.controller("EditCtrl",function($scope, $state, CategoryService, category ){
    console.log("EditCtrl Start...");
    $scope.category = category.data;

    $scope.save = function () {
        CategoryService.save($scope.category).success(function (resposne) {
            $state.go("home")
        }).error(function (response) {
            $scope.message = response;
        });
    }

})