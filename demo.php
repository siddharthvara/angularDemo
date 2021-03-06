<?php
$url = $_SERVER['APP_URL'].$_SERVER['REQUEST_URI'];
//echo $url;
?>
<!DOCTYPE html>
<html lang="en" ng-app = "myModule">

<head>
<base href= <?php echo $url;?> >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <script src="Script/angular.min.js"></script>
    <script src="Script/angular-route.min.js"></script>
    
    

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            <!--    <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li> -->
                <li>
                    <a href="dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="about">About</a>
                </li>
                <li>
                    <a href="contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
            <div class="container-fluid">
            <div ng-view></div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<script src="Script/Script.js"></script>
</body>

</html>
