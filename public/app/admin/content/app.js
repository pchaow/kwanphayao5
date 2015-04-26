/**
 * Created by chaow on 2/15/2015 AD.
 */

var app = angular.module('ContentApp', ['froala','ui.router', 'ngResource', 'ui.bootstrap']);

app.value('froalaConfig', {
    inlineMode: false,
    placeholder: 'Enter Text Here',
    height: 300

});

app.config(function ($stateProvider, $urlRouterProvider) {
    ////
    //// For any unmatched url, redirect to /state1
    //
    $stateProvider
        .state('list', {
            url: "/list",
            templateUrl: "/app/admin/content/list.html",
            controller: "ListCtrl",
            controller: "ListCtrl",
            resolve: {
                contents: function (ContentService, $stateParams) {
                    return ContentService.list(1,"");
                }
            }
        })

        .state('select-category',{
            url : "/select",
            templateUrl : "/app/admin/content/select_category.html",
            controller : "SelectCategoryController",
            resolve : {
                content : function(ContentService){
                    return { data : {} };
                },
                mainCategories : function(MainCategoryService){
                    return MainCategoryService.all();
                }
            }
        })

        .state('create',{
            url : "/create/:category/:type",
            templateUrl : "/app/admin/content/form.html",
            controller : "FormCtrl",
            resolve : {
                content : function(ContentService){
                    return { data : {} };
                },
                content_type : function(ContentTypeService,$stateParams){
                    return ContentTypeService.get($stateParams.type)
                },
                category : function(CategoryService,$stateParams){
                    return CategoryService.edit($stateParams.category)
                }
            }
        })

        .state('create.type',{
            url : '/type',
            templateUrl: function($stateParams){
                return "/app/content/form/"+$stateParams.type+".html";
            }
        })

        .state('edit',{
            url : "/edit/:id",
            templateUrl : "/app/admin/content/form.html",
            controller : "FormCtrl",
            resolve : {
                content : function(ContentService,$stateParams){
                    return ContentService.edit($stateParams.id);
                },
                content_type : function(ContentTypeService,$stateParams){
                    return {}
                },
                category : function(CategoryService,$stateParams){
                    return {}
                }
            }
        })

        .state('edit.type',{
            url : "/type/:type",
            templateUrl: function($stateParams){
                return "/app/content/form/"+$stateParams.type+".html";
            }
        })


    $urlRouterProvider.otherwise("/list");


});