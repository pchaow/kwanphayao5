/**
 * Created by chaow on 2/4/2015 AD.
 */

app.factory('MainCategoryService', function ($http) {
    return {
        all : function(){
            return $http({
                method: 'get',
                url: '/admin/api/main-category/all',
                header : 'application/json'
            })
        },
        list: function ($page, $filter) {
            return $http({
                method: 'get',
                url: '/admin/api/main-category?page=' + $page + "&filter=" + $filter
            })
        },
        save : function ($categoryType){
            return $http({
                method: 'post',
                url: '/admin/api/main-category/save',
                header : 'application/json',
                data : $categoryType
            })
        },
        edit : function($id){

            return $http({
                url : '/admin/api/main-category/edit/'+$id,
                method : 'get'
            })
        },
        delete : function($categoryType){
            return $http({
                url : '/admin/api/main-category/delete',
                method : 'post',
                header : 'application/json',
                data : $categoryType
            })
        },
        categories : function($id){
            return $http({
                method: 'get',
                url: '/admin/api/main-category/'+$id+'/categories',
                header : 'application/json'
            })
        },
        saveCategory : function($id,$category){
            return $http({
                url : '/admin/api/main-category/'+$id+'/categories/save',
                method : 'post',
                header : 'application/json',
                data : $category
            })
        },
        saveOrder : function($order){
            return $http({
                url : '/admin/api/main-category/save-order',
                method : 'post',
                header : 'application/json',
                data : $order
            })
        }
    }
})
