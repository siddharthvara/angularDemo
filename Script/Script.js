
var myApp = angular.module("myModule",[]); //create myModule

myApp.controller("myController",function($scope){
    $scope.message = "Angular Tutorial";
});

myApp.controller("myController2",function($scope){
    var country = {
        name : "India",
        capital : "Delhi",
        flag : "Images/India_flag.gif"
    };
    $scope.country = country;
});