/**
 * Created by chaow on 2/4/2015 AD.
 */

app.controller('ListCtrl', function ($scope, mainCategories, MainCategoryService) {
    console.log("ListCtrl Start...");

    $scope.dt = mainCategories.data;
    $scope.mainCategories = mainCategories.data.data;

    $scope.currentPage;
    $scope.filterWord = "";

    $scope.pageChange = function () {
        MainCategoryService.list($scope.currentPage, $scope.filterWord).success(function (response) {
            $scope.mainCategories = response.data;
            $scope.dt = response;
        })
    }

    $scope.filterChange = function () {
        $scope.currentPage = 1;
        $scope.pageChange();
    }

    $scope.delete = function (mainCategory) {
        confirm_string = "Do you want to delete this Main Category id:" + mainCategory.id + " ?";
        if (confirm(confirm_string)) {
            MainCategoryService.delete(mainCategory).success(function () {
                index = $scope.mainCategories.indexOf(mainCategory);
                $scope.mainCategories.splice(index, 1);
            });
        }
    }

    $scope.sortableOptions = {
        stop: function (e, ui) {
            saveOrder();

        },
        axis: 'y'
    };

    function saveOrder() {

        order = [];

        $scope.mainCategories.forEach(function (item, index) {
                a = {
                    id: item.id,
                    order: index
                };
                order.push(a);
            }
        )

        console.log(order);

        MainCategoryService.saveOrder(order);

    }

})


app.controller('FormCtrl', function ($scope, $state, mainCategory, MainCategoryService) {

    $scope.mainCategory = mainCategory.data;

    $scope.save = function () {

        MainCategoryService.save($scope.mainCategory).success(function (response) {
            console.log(response);
            $state.go('list');
        })
    }

});

app.controller('CategoryListCtrl', function ($scope, $state, mainCategory, categories, MainCategoryService, CategoryService) {

    $scope.mainCategory = mainCategory.data;

    $scope.categories = categories.data;

    $scope.delete = function (category) {
        confirm_string = "Do you want to delete this Category id:" + category.id + " ?";
        if (confirm(confirm_string)) {
            CategoryService.delete(category).success(function () {
                index = $scope.categories.indexOf(category);
                $scope.categories.splice(index, 1);
            });
        }
    }

    $scope.sortableOptions = {
        stop: function (e, ui) {
            saveOrder();

        },
        axis: 'y'
    };

    function saveOrder() {

        order = [];

        $scope.categories.forEach(function (item, index) {
                a = {
                    id: item.id,
                    order: index
                };
                order.push(a);
            }
        )

        console.log(order);

        CategoryService.saveOrder(order);

    }

});

app.controller('CategoryFormCtrl', function ($scope, $state,contentTypes, mainCategory, category, MainCategoryService) {

    $scope.mainCategory = mainCategory.data;

    $scope.category = category.data;

    $scope.contentTypes = contentTypes.data;

    if($scope.category.content_type){
        $scope.contentTypes.forEach(function(obj,index){

            if($scope.category.content_type == obj.id){
                $scope.category.content_type = $scope.contentTypes[index];

                console.log(index);
            }
        });
    }

    $scope.save = function () {
        MainCategoryService.saveCategory($scope.mainCategory.id, $scope.category).success(function (response) {
            $state.go('category-list', {id: $scope.mainCategory.id});
        })
    }

});
