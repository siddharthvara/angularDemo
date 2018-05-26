<!DOCTYPE html>
<html ng-app = "myModule">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="Script/angular.min.js"></script>
    <script src="Script/Script.js"></script>
</head>
<body style="background: cornsilk;">
    <div class="container">
        <h1>Angular Demo</h1>
        <br>
        <div>
            <h2>Practical: 1</h2>
            <br>
            <h3>sum using angular.</h3>
            10 + 20 = {{ 10+20 }}
        </div>
        <hr />
        <div>
            <h2>Practical: 2</h2>
            <br>
            <label>Name:</label>
            <input type = "text" ng-model = "yourName" placeholder = "Enter a name here">
            <br>
            <h3>Hello {{yourName}}!</h3>
        </div>
        <hr />
        <div ng-controller = "myController">
            <h2>Practical: 3</h2>
            <br>
            <h3>Display message using module and controller.</h3>
            <br>
            {{ message }}
        </div>
        <hr>
        <div ng-controller = "myController2">
            <h2>Practical: 4</h2>
            <br>
            <h3>ng-scr directive.</h3>
            <br>
            Country Name : {{ country.name }}
            <br>
            Capital : {{ country.capital }}
            <br>
            <img ng-src="{{ country.flag }}" alt="Indian Flage" style="height:100px;width:200px;">
        </div>
        <hr>
        <div ng-controller="myController3">
            <h2>Practical: 5</h2>
            <br>
            <h3>Two way databinding.</h3>
            <br>
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="firstName" ng-model="emp.firstName"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lastName" ng-model="emp.lastName"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="gender" ng-model="emp.gender"></td>
                </tr>
            </table>
            <br>
            <br>
            <table>
                <tr>
                    <td>First Name</td>
                    <td>{{ emp.firstName }}</td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>{{ emp.lastName }}</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>{{ emp.gender }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div ng-controller="myController3">
            <h2>Practical: 6</h2>
            <br>
            <h3>ng-repeat directive and nasted ng-repeat.</h3>
            <br>
            <ul>
                <li ng-repeat="c in city">{{ c.name }}
                    <ul>
                        <li ng-repeat="p in c.pincode">{{ p.code }}</li>
                    </ul>
                </li>
            </ul>
        </div>
        <hr>
        <div ng-controller="myController3">
                <h2>Practical: 7, 8  and 9</h2>
                <br>
                <h3>Event handling and filtes in angular and data shorting.</h3>
                <br>
                <ul>
                    <li>uppercase filter.</li>
                    <li>lowercase filter.</li>
                    <li>limitTo filter.</li>
                    <li>currency filter.</li>
                    <li>number filter.</li>
                    <li>orderBy filter.</li>
                    <li>'filter' filter <b>(Practical 11)</b>.</li>
                </ul>
                <br>
                Enter subject: <input type = "text" ng-model = "subjectName">&nbsp;&nbsp;Row to display: <input type="number" step="1" min="1" max="5" ng-model="rowLimit">
                <br><br>
                Order By : <select ng-model="orderBy">
                                <option value="name">Name Asc</option>
                                <option value="fees">Fees Asc</option>
                                <option value="-fees">Fees DESC</option>
                                <option value="likes">Likes Asc</option>
                                <option value="-likes">Likes DESC</option>
                                <option value="dislikes">Dislikes Asc</option>
                                <option value="-dislikes">Dislikes DESC</option>
                            </select>
                <br><br>
                <table class="table">
                    <thead>
                        <th>Subject</th>
                        <th>Fees (Number filter)</th>
                        <th>Fees (Currency filter)</th>
                        <th>Likes</th>
                        <th>Dislikes</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr ng-repeat = "sub in subject | filter: subjectName | limitTo : rowLimit | orderBy: orderBy">
                            <td>{{ sub.name | uppercase }}</td>
                            <td>{{ sub.fees | number : 2}}</td>
                            <td>{{ sub.fees | currency}}</td>
                            <td>{{ sub.likes }}</td>
                            <td>{{ sub.dislikes }}</td>
                            <td>
                                <input type="button" class="btn" value="Like" ng-click = "incrementLike(sub)">
                                <input type="button" class="btn" value="Dislike" ng-click = "incrementDislike(sub)">
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
        <br>
        <hr>
        <div ng-controller="myController3">
            <h2>Practical: 10</h2>
            <br>
            <h3>AngularJS sort rows by table header.</h3>
            <br><br>
            <table class="table">
                    <thead>
                        <th style = "cursor: pointer;" ng-click="SortData('name')">Subject<div ng-class="getSortClass('name')" ></div></th>
                        <th style = "cursor: pointer;" ng-click="SortData('fees')">Fees <div ng-class="getSortClass('fees')" ></div></th>
                    </thead>
                    <tbody>
                        <tr ng-repeat = "sub in subject|orderBy:SortColumn:reverseSort">
                               <td>{{ sub.name | uppercase }}</td>
                            <td>{{ sub.fees | number : 2}}</td>
                          
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>    
</body>
</html>
<style>
.arrow-up {  
width:0;  
height:0;  
border-left:5px solid transparent;  
border-right:5px solid transparent ;  
border-bottom:10px solid black;  
display:inline-block;
}  
  
.arrow-down {  
width:0;  
height:0;  
border-left:5px solid transparent;  
border-right:5px solid transparent;  
border-top:10px solid black;
display:inline-block;  
}  
</style>