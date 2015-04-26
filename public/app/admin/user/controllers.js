app.controller('ListCtrl', function($scope, user, UserService) {
    console.log("ListCtrl Start...");

    $scope.dt = user.data;
    $scope.users = user.data.data;
    console.log($scope.dt);

    $scope.currentPage;
    $scope.filterWord = "";

    $scope.pageChange = function() {
        UserService.list($scope.currentPage,$scope.filterWord).success(function(response) {
            $scope.users = response.data;
            $scope.dt = response;
        })
    };

    $scope.filterChange = function() {
        $scope.currentPage = 1;
        $scope.pageChange();
    };

    $scope.delete = function(user) {
        confirm_string = "Do you want to delete this User id:"+user.id+" ?";
        if(confirm(confirm_string)) {
            UserService.delete(user).success(function() {
                index = $scope.users.indexOf(user);
                $scope.users.splice(index,1);
            });
        }
    }
});

app.controller('FormCtrl', function($scope, $state, user, roles, UserService) {

    function init() {
        $scope.user = user.data;
        $scope.roles = roles.data;
        
        if($scope.user.role==null) {
            $scope.user.role = $scope.roles[0];
        } else {
            var index;
            $scope.roles.forEach(function(e1,idx) {
                if(e1.id == $scope.user.role.id) {
                    index = idx;
                }
            });
            $scope.user.role = $scope.roles[index];
        }
            
    }

    init();

    $scope.selRoleChanged = function() {
        console.log($scope.user.role);
    };

    $scope.save = function() {
        console.log($scope.user);

        UserService.save($scope.user).success(function(response) {
            $state.go('list');
        })
    };

});