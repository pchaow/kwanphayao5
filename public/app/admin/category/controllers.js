/**
 * Created by chaow on 2/4/2015 AD.
 */

app.controller('ListCtrl', function ($scope, categories, CategoryService) {
    console.log("ListCtrl Start...");

    $scope.dt = categories.data;
    $scope.categories = categories.data.data;
    console.log($scope.dt);

    $scope.currentPage;
    $scope.filterWord = "";

    $scope.pageChange = function () {
        CategoryService.list($scope.currentPage, $scope.filterWord).success(function (response) {
            $scope.categories = response.data;
            $scope.dt = response;
        })
    }

    $scope.filterChange = function () {
        $scope.currentPage = 1;
        $scope.pageChange();
    }

    $scope.delete = function (category) {
        confirm_string = "Do you want to delete this Category id:" + category.id + " ?";
        if (confirm(confirm_string)) {
            CategoryService.delete(category).success(function () {
                index = $scope.categories.indexOf(category);
                $scope.categories.splice(index, 1);
            });
        }
    }
})


app.controller('FormCtrl', function ($scope, $state, category, mainCategories, CategoryService) {

    function init() {
        $scope.category = category.data;
        $scope.mainCategories = mainCategories.data;

        initMainCategory();


    }

    function initMainCategory() {
        if ($scope.category.parent == null) {
            $scope.category.parent = $scope.mainCategories[0];
        } else {
            // do nothing
            var index = 0;
            $scope.mainCategories.forEach(function (el, idx) {
                if (el.id == $scope.category.parent.id) {
                    index = idx;
                }
            })
            $scope.category.parent = $scope.mainCategories[index];
        }
    }

    init();

    $scope.selMainCategoryChanged = function () {
        console.log($scope.category.parent);
    }

    $scope.save = function () {
        console.log($scope.category);

        CategoryService.save($scope.category).success(function (response) {
            $state.go('list');
        })
    }

});
