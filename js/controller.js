app.controller('viewController', function ($scope, $http) {
    "use strict";
    $scope.show_tenants = false;
    $scope.show_estates = false;
    $scope.addEstateForm = false;
    $scope.addTenantForm = false;
    $scope.icon = "plus";
    $scope.searchBar = "searchBar";
    
    $scope.showTenants = function () {
        $scope.show_tenants = true;
        $scope.show_estates = false;
        $scope.addEstateForm = false;
    };
    
    $scope.showEstates = function () {
        $scope.show_estates = true;
        $scope.show_tenants = false;
        $scope.addTenantForm = false;
    };
    
    $scope.addEstate = function () {
        $scope.addEstateForm = !$scope.addEstateForm;
    };
    
    $scope.changeIcon = function () {
      if ($scope.icon === "remove") {
          $scope.icon = "plus";
      } else {
          $scope.icon = "remove";
      }
    };
    
    $http.get("php/viewTenants.php")
        .then(function (response) {
            $scope.tenants = response.data;
        });
    
    $http.get("php/viewEstates.php")
        .then(function (response) {
            $scope.estates = response.data;
        });
});