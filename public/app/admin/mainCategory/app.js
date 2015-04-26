/**
 * Created by chaow on 2/3/2015 AD.
 */
var app = angular.module('MainCategoryApp', ['ui.router', 'ngResource', 'ui.bootstrap','ui.sortable']);
app.config(function ($stateProvider, $urlRouterProvider) {
    //
    // For any unmatched url, redirect to /state1

    $stateProvider
        .state('list', {
            url: "/list",
            templateUrl: "/app/admin/mainCategory/list.html",
            controller: "ListCtrl",
            resolve: {
                mainCategories: function (MainCategoryService, $stateParams) {
                    return MainCategoryService.list(1, "");
                }
            }
        })

        .state('create', {
            url: "/create",
            templateUrl: "/app/admin/mainCategory/form.html",
            controller: "FormCtrl",
            resolve: {
                mainCategory: function (MainCategoryService, $stateParams) {
                    return {data: {}};
                }
            }
        })

        .state('edit', {
            url: "/edit/:id",
            templateUrl: "/app/admin/mainCategory/form.html",
            controller: "FormCtrl",
            resolve: {
                mainCategory: function (MainCategoryService, $stateParams) {
                    return MainCategoryService.edit($stateParams.id);
                }
            }
        })

        .state('category-edit',{
            url: "/view/:id/edit/:cid",
            templateUrl: "/app/admin/mainCategory/category_form.html",
            controller : "CategoryFormCtrl",
            resolve : {
                mainCategory: function (MainCategoryService, $stateParams) {
                    return MainCategoryService.edit($stateParams.id);
                },
                category : function(CategoryService,$stateParams){
                    return CategoryService.edit($stateParams.cid);
                },
                contentTypes : function(ContentTypeService){
                    return ContentTypeService.all();
                }
            }
        })


        .state('category-create',{
            url: "/view/:id/create",
            templateUrl: "/app/admin/mainCategory/category_form.html",
            controller : "CategoryFormCtrl",
            resolve : {
                mainCategory: function (MainCategoryService, $stateParams) {
                    return MainCategoryService.edit($stateParams.id);
                },
                category : function(){
                    return { data : { }}
                },
                contentTypes : function(ContentTypeService){
                    return ContentTypeService.all();
                }
            }
        })


        .state('category-list', {
            url: "/view/:id",
            templateUrl: "/app/admin/mainCategory/category_list.html",
            controller: "CategoryListCtrl",
            resolve: {
                mainCategory: function (MainCategoryService, $stateParams) {
                    return MainCategoryService.edit($stateParams.id);
                },
                categories: function (MainCategoryService, $stateParams){
                    return MainCategoryService.categories($stateParams.id);
                }
            }
        })




    $urlRouterProvider.otherwise("/list");


});