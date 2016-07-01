var app = angular.module('comics', ['ngMaterial']);

app.controller('MainController', function ($scope, $http) {
    $scope.tarinalista = [];
    $scope.showMenu = true;
    $scope.showList = false;

    this.getMagazine = function (filename) {
        $http.get(filename).success(function (data) {
            console.log(data);
            $scope.lehdennimi = data.lehdennimi;
            $scope.tarinalista = data.tarinalista;
            $scope.showMenu = false;
            $scope.showList = true;
        }).error(function (error) {
            console.log("Error");
        });
        console.log($scope.tarinalista);
    };
    
    this.showMenu = function () {
        $scope.showMenu = true;
        $scope.showList = false;
    };

});
