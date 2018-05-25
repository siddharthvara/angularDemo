
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

myApp.controller("myController3",function($scope){
    var emp = {
        firstName : "Siddharth",
        lastName : "Vara",
        gender : "Male"
    };
    $scope.emp = emp;
});