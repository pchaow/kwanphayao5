angular.module('Page',[])
    .factory('PageService',function($http){
        return {
            all : function(){
                return $http.get('/api/page');
            },
            get : function(id){
                return  $http.get('/api/page/'+id);
            },
            edit : function(id){
                return  $http.get('/api/page/'+id);
            },
            create : function(){
                return $http.get('/api/page/create');
            },
            store : function(page){

                return $http({
                    url : '/api/page',
                    method : 'post',
                    data : page
                })
            },
            delete : function(page){
                return $http.delete('/api/page/' + page.id);
            },
            save : function(page){
                return $http({
                    url : '/api/page/' + page.id,
                    method : 'put',
                    data : page
                })
            }
        }
    })