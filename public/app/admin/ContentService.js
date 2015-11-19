angular.module('Content',[])
    .factory('ContentService',function($http){
        return {
            all : function(){
                return $http.get('/api/content');
            },
            get : function(id){
                return  $http.get('/api/content/'+id);
            },
            edit : function(id){
                return  $http.get('/api/content/'+id);
            },
            create : function(){
                return $http.get('/api/content/create');
            },
            store : function(content){

                return $http({
                    url : '/api/content',
                    method : 'post',
                    data : content
                })
            },
            delete : function(content){
                return $http.delete('/api/content/' + content.id);
            },
            save : function(content){
                return $http({
                    url : '/api/content/' + content.id,
                    method : 'put',
                    data : content
                })
            },
            removeCover : function(content){
                console.log(content);
                return $http({
                    url : '/api/content/' + content.id + "/cover",
                    method : 'delete',
                })
            }
        }
    })