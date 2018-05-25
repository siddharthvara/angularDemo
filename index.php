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
<body ng-controller = "myController">
    <div class="container">
        <h1>Angular Demo</h1>
        <br>
        <div>
            <h1>Practical: 1</h1>
            <br>
            <h3>sum using angular.</h3>
            10 + 20 = {{ 10+20 }}
        </div>
        <hr />
        <div>
            <h1>Practical: 2</h1>
            <br>
            <label>Name:</label>
            <input type = "text" ng-model = "yourName" placeholder = "Enter a name here">
            <br>
            <h3>Hello {{yourName}}!</h3>
        </div>
        <hr />
        <div>
        <h1>Practical: 3</h1>
            <br>
            <h3>Display message using module and controller.</h3>
            <br>
            {{ message }}
        </div>
    </div>
</body>
</html>