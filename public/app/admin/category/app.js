/**
 * Created by chaow on 2/3/2015 AD.
 */
var app = angular.module('CategoryApp', ['ui.router', 'ngResource', 'ui.bootstrap']);
app.config(function ($stateProvider, $urlRouterProvider) {
    //
    // For any unmatched url, redirect to /state1

    $stateProvider
        .state('list', {
            url: "/list",
            templateUrl: "/app/admin/category/list.html",
            controller: "ListCtrl",
            resolve: {
                categories: function (CategoryService, $stateParams) {
                    return CategoryService.list(1,"");
                }
            }
        })

        .state('create',{
            url : "/create",
            templateUrl : "/app/admin/category/form.html",
            controller : "FormCtrl",
            resolve : {
                category : function(CategoryService,$stateParams){
                    return { data : {} };
                },
                mainCategories : function(MainCategoryService){
                    return MainCategoryService.all();
                }
            }
        })

        .state('edit',{
            url : "/edit/:id",
            templateUrl : "/app/admin/category/form.html",
            controller : "FormCtrl",
            resolve : {
                category : function(CategoryService,$stateParams){
                    return CategoryService.edit($stateParams.id);
                },
                mainCategories : function(MainCategoryService){
                    return MainCategoryService.all();
                }
            }
        })


    $urlRouterProvider.otherwise("/list");


});