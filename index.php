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
                <h2>Practical: 7</h2>
                <br>
                <h3>Event handling in angular.</h3>
                <br>
                <table class="table">
                    <thead>
                        <th>Subject</th>
                        <th>Likes</th>
                        <th>Dislikes</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr ng-repeat = "sub in subject">
                            <td>{{ sub.name }}</td>
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
    </div>    
</body>
</html>