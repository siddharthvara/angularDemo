
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

    var city = [
        { 
            name : "Jamnagar",
            pincode : [
                { code : "361001"},
                { code : "361002"},
                { code : "361003"},
            ]
         },
        { 
            name : "Rajkot",
            pincode : [
                { code : "371001"},
                { code : "371002"},
                { code : "371003"},
            ] 
        },
        { 
            name : "Bhavnagar",
            pincode : [
                { code : "381001"},
                { code : "381002"},
                { code : "381003"},
            ]
        }
    ];


    $scope.emp = emp;
    $scope.city = city;

});