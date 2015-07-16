angular.module('Bibliography',[])
    .factory('BibliographyService',function($http){
        return {
            all : function(){
                return $http.get('/api/bibliography');
            },
            get : function(id){
                return  $http.get('/api/bibliography/'+id);
            },
            edit : function(id){
                return  $http.get('/api/bibliography/'+id);
            },
            create : function(){
                return $http.get('/api/bibliography/create');
            },
            store : function(bibliography){

                return $http({
                    url : '/api/bibliography',
                    method : 'post',
                    data : bibliography
                })
            },
            delete : function(bibliography){
                return $http.delete('/api/bibliography/' + bibliography.id);
            },
            save : function(bibliography){
                return $http({
                    url : '/api/bibliography/' + bibliography.id,
                    method : 'put',
                    data : bibliography
                })
            }
        }
    })