app.controller('ListCtrl', function($scope, roles, RoleService) {
    console.log("ListCtrl Start...");

    $scope.dt = roles.data;
    $scope.roles = roles.data.data;

    $scope.currentPage;
    $scope.filterWord = "";

    $scope.pageChange = function() {
        RoleService.list($scope.currentPage, $scope.filterWord).success(function(response) {
            $scope.roles = response.data;
            $scope.dt = response;
        })
    };

    $scope.filterChange = function() {
        $scope.currentPage = 1;
        $scope.pageChange();
    };

    $scope.delete = function(role) {
        confirm_string = "Do you want to delete this Role id:"+role.id+" ?";
        if(confirm(confirm_string)) {
            RoleService.delete(role).success(function() {
                index = $scope.roles.indexOf(role);
                $scope.roles.splice(index,1);
            });
        }
    }
});

app.controller('FormCtrl', function($scope, $state, role, RoleService) {
    $scope.role = role.data;
    $scope.save = function() {
        RoleService.save($scope.role).success(function (response) {
            console.log(response);
            $state.go('list');
        })
    }
});