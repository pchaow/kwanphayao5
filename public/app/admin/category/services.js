/**
 * Created by chaow on 2/4/2015 AD.
 */

app.factory('CategoryService', function ($http) {
    return {
        all : function(){
            return $http({
                method : 'get',
                url : '/admin/api/v1/category/all',
                header : 'application/json'
            })
        },
        list: function ($page, $filter) {
            return $http({
                method: 'get',
                url: '/admin/api/v1/category?page=' + $page + "&filter=" + $filter
            })
        },
        save : function ($category){
            return $http({
                method: 'post',
                url: '/admin/api/v1/category/save',
                header : 'application/json',
                data : $category
            })
        },
        edit : function($id){
            return $http({
                url : '/admin/api/v1/category/edit/'+$id,
                method : 'get'
            })
        },
        delete : function($categoryType){
            return $http({
                url : '/admin/api/v1/category/delete',
                method : 'post',
                header : 'application/json',
                data : $categoryType
            })
        },
        saveOrder : function($order){
            return $http({
                url : '/admin/api/v1/category/save-order',
                method : 'post',
                header : 'application/json',
                data : $order
            })
        }
    }
})
