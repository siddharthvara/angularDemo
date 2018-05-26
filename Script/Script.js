
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

    var subject = [
        { name : "Maths",fees : "5000",likes : "0",dislikes : "0" },
        { name : "Hindi",fees : "2000",likes : "0",dislikes : "0" },
        { name : "Computer",fees : "4000",likes : "0",dislikes : "0" },
        { name : "English",fees : "3000",likes : "0",dislikes : "0" }
    ];


    $scope.emp = emp;
    $scope.city = city;
    $scope.subject = subject;
    $scope.rowLimit = 3;
    $scope.orderBy = "name";

    //AngularJS sort rows by table header.
    $scope.SortColumn = "name";  
    $scope.reverseSort = false;  


    $scope.SortData = function (column) {  
        $scope.SortColumn = column;  
        $scope.reverseSort = ($scope.SortColumn == column) ? !$scope.reverseSort : false;  
        $scope.SortDate = column;  

    }  

    $scope.getSortClass = function (column)  
    {  
        
        if ($scope.SortColumn == column) {
              
            return $scope.reverseSort ? 'arrow-down' : 'arrow-up';

        }  
        return '';  

    }  

    //AngularJS sort rows by table header.


    $scope.incrementLike = function(sub){
        sub.likes ++;
    };

    $scope.incrementDislike = function(sub){
        sub.dislikes ++;
    };

});