/**
 * Created by chaow on 2/4/2015 AD.
 */

app.factory('ContentService', function ($http) {
    return {
        all : function(){
            return $http({
                method : 'get',
                url : '/admin/api/v1/content/all',
                header : 'application/json'
            })
        },
        list: function ($page, $filter) {
            return $http({
                method: 'get',
                url: '/admin/api/v1/content/?page=' + $page + "&filter=" + $filter
            })
        },
        save : function ($content){
            return $http({
                method: 'post',
                url: '/admin/api/v1/content/save',
                header : 'application/json',
                data : $content
            })
        },
        edit : function($id){
            return $http({
                url : '/admin/api/v1/content/edit/'+$id,
                method : 'get'
            })
        },
        delete : function($content){
            return $http({
                url : '/admin/api/v1/content/delete',
                method : 'post',
                header : 'application/json',
                data : $content
            })
        }
    }
})
