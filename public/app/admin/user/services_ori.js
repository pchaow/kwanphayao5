app.factory('UserService', function($http) {
   return {
       all : function() {
           return $http({
               method : 'get',
               url : '/admin/api/user/all',
               header : 'application/json'
           })
       },
       list: function ($page, $filter) {
           return $http({
               method : 'get',
               url : '/admin/api/user?page=' + $page + "&filter=" + $filter
           })
       },
       save : function($user) {
           return $http({
               method : 'post',
               url : '/admin/api/user/save',
               header : 'application/json',
               data : $user
           })
       },
       edit : function($id) {
           return $http({
               method : 'get',
               url : '/admin/api/user/edit/'+$id
           })
       },
       delete : function($user) {
           return $http({
               method : 'post',
               url : '/admin/api/user/delete',
               header : 'application/json',
               data : $user
           })
       }
   }
});