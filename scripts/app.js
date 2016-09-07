var app = angular.module('comics', ['ngMaterial', 'ui.router']);

app.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/tab/dash');
    $stateProvider
    .state('albumit', {
        url: "/albumit",
        templateUrl: "partials/view1.html"
    })
    .state('lehdet', {
        url: "/lehdet",
        templateUrl: "partials/view2.html"
    })
    .state('sarjat', {
        url: "/sarjat",
        templateUrl: "partials/view3.html"
    })
    .state('tekijat', {
        url: "/tekijat",
        templateUrl: "partials/view4.html"
    })
    ;
});

app.controller('tabCtrl', function($scope, $location, $log, $http) {
    $scope.selectedIndex = 0;
    $scope.showMenu = true;
    $scope.showList = false;

    $scope.$watch('selectedIndex', function(current, old) {
      switch (current) {
        case 0:
          $location.url("/albumit");
          break;
        case 1:
          $location.url("/lehdet");
          break;
        case 2:
          $location.url("/sarjat");
          break;
        case 3:
          $location.url("/tekijat");
          break;
      }
    });

    $scope.getContent = function (filename) {
        $http.get(filename).success(function (data) {
            $scope.lehdennimi = data.lehdennimi;
            $scope.tarinalista = data.tarinalista;
            $scope.showMenu = false;
            $scope.showList = true;
        }).error(function (error) {
            console.log("Error");
        });
    };

    $scope.showMenulist = function () {
        $scope.showMenu = true;
        $scope.showList = false;
    };
});
