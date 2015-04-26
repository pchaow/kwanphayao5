/**
 * Created by chaow on 2/4/2015 AD.
 */

app.factory('ContentTypeService', function ($http) {
    return {
        all : function(){
            return $http({
                method : 'get',
                url : '/admin/api/v1/content-type/all',
                header : 'application/json'
            })
        },
        get : function($id){
            return $http({
                method : 'get',
                url : '/admin/api/v1/content-type/view/'+$id,
                header : 'application/json'
            })
        }
    }
})
