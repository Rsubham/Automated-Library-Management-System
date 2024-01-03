<?php
session_start();
require('DBConnectionadd.php');
include "nav.php";
if(!$_SESSION['sroll']){

    echo '<script>alert("Please Login First")
      location.assign("/rsubhamlbr/login.php");
      </script>';
  }else{
    
?>


<!DOCTYPE html>
<html lang="en">

    <head>
    <style>
            .module {
	background: #fff;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	border: 1px solid #ccc;
	border-bottom-color: #bbb;
	-webkit-box-shadow: 0 0 1px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 0 1px rgba(0,0,0,0.2);
	box-shadow: 0 0 1px rgba(0,0,0,0.2);
	margin-bottom: 30px
}
.module-head {
	
	color: #767676;
background-color: #a2c5d6e6;
border-color: #e9e9e9;


	padding: 10px 15px;
border-bottom: 1px solid transparent;
border-top-right-radius: 3px;
border-top-left-radius: 3px;	
}
.module-head h3 {
	font-size: 14px;
	line-height: 20px;
	height: 20px;
	margin: 0
}
.module-body {
    background-color: #9db2b861;
	padding: 15px
}


        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <link type="text/css" href="css/style.css" rel="stylesheet">

    </head>
    <body>
  
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="history.php"><i class="menu-icon icon-tasks"></i>Previously Borrowed Books </a></li>
                                <li><a href="recommendations.php"><i class="menu-icon icon-list"></i>Recommend Books </a></li>
                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="module">
                            <div class="module-head">
                                <h3>Update Details</h3>
                            </div>
                            <div class="module-body">


                                <?php
                                $sroll = $_SESSION['sroll'];
                                $sql="select * from student where sroll='$sroll'";
                                $result=$con->query($sql);
                                $row=$result->fetch_assoc();

                                $sname=$row['sname'];
                                $sroll=$row['sroll'];
                                $semail=$row['semail'];
                                $snum=$row['snum'];
                                $spass=$row['spass'];
                                ?>    
                    			
                                <form class="form-horizontal row-fluid" action="update.php" method="post">

                                    <div class="control-group">
                                        <label class="control-label" for="Name"><b>Name:</b></label>
                                        <div class="controls">
                                            <input type="text" id="Name" name="sname" value= "<?php echo $sname?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="Name"><b>Roll Number:</b></label>
                                        <div class="controls">
                                            <input type="text" id="Name" name="sroll" value= "<?php echo $sroll?>" class="span8" required>
                                        </div>
                                    </div>
                                    


                                    <div class="control-group">
                                        <label class="control-label" for="semail"><b>Email Id:</b></label>
                                        <div class="controls">
                                            <input type="email" id="semail" name="semail" value= "<?php echo $semail?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="snum"><b>Mobile Number:</b></label>
                                        <div class="controls">
                                            <input type="number" id="snum" name="snum" value= "<?php echo $snum?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="spass"><b>New Password:</b></label>
                                        <div class="controls">
                                            <input type="password" id="spass" name="spass"  value= "<?php echo $spass?>" class="span8" required>
                                        </div>
                                    </div>   

                                    <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn-primary"><center>Update Details</center></button>
                                            </div>
                                        </div>                                                                     

                                </form>
                    		           
                        </div>
                        </div> 	
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->

        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2022 R.SUBHAM </b>All rights reserved.
            </div>
        </div>

      
    </body>

</html>
<?php }
 ?>