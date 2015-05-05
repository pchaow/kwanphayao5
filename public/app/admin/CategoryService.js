angular.module('Category',[])
    .factory('CategoryService',function($http){
        return {
            all : function(){
                return $http.get('/api/category');
            },
            get : function(id){
                return  $http.get('/api/category/'+id);
            },
            edit : function(id){
                return  $http.get('/api/category/'+id);
            },
            create : function(){
                return $http.get('/api/category/create');
            },
            store : function(category){

                return $http({
                    url : '/api/category',
                    method : 'post',
                    data : category
                })
            },
            delete : function(category){
                return $http.delete('/api/category/' + category.id);
            },
            save : function(category){
                return $http({
                    url : '/api/category/' + category.id,
                    method : 'put',
                    data : category
                })
            }
        }
    })