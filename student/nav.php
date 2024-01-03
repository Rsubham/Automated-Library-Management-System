<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="css/style.css" rel="stylesheet">

         
    </head>
    <style type="text/css" media="screen">
    body {
        background-color: rgba(80, 255, 255, 0.288);
    }

    
</style>
<style>
    .navbar .brand {
    position: absolute;
	color: rgb(97, 97, 97);
	font-weight: 400;
	font-size: 20px;
	margin-right: 20px;
	padding: 10px
}

.nav-user>a {
	height: 20px
}
.nav-avatar {
	width: 34px;
	height: 34px;
	margin: -7px 5px 0 0;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
</style>


    <body>


    <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Welcome to MCA/CS Library RU </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/profile.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>

    </body>

</html>