/**
 * Created by chaow on 4/7/2015.
 */

angular.module('Role',[])
    .factory('RoleService',function($http){
        return {
            all : function() {
                return $http.get('/api/role');
            }
        }
    })