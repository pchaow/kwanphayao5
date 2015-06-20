angular.module('Category',[])
    .factory('CategoryService',function($http){
        return {
            all : function(query){
                if(query){

                }else {
                    query = "?children=true";
                }
                return $http.get('/api/category/'+query);
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

    .factory('SubCategoryService',function($http){
        return {
            all : function($id){
                return $http.get('/api/category/'+$id + "/sub-category");
            },
            get : function($id,id){
                return $http.get('/api/category/'+$id + "/sub-category/"+id);
            },
            edit : function(id){
                return $http.get('/api/category/'+$id + "/sub-category/"+id);
            },

            store : function($id,category){

                return $http({
                    url : '/api/category/'+$id + "/sub-category",
                    method : 'post',
                    data : category
                })
            },
            delete : function($id,category){
                return $http.delete('/api/category/'+$id+'/sub-category/'+ category.id);
            },
            save : function($id,category){
                return $http({
                    url : '/api/category/'+$id + "/sub-category/"+category.id,
                    method : 'put',
                    data : category
                })
            }
        }
    })