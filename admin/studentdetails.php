<?php
session_start();
require('DBConnectionadd.php');
include "nav.php";
include "menu.php";
if(!$_SESSION['userid']){

    echo '<script>alert("ACCESS DENIED")
      location.assign("/rsubhamlbr/adminlogin.php");
      </script>';
  }else{
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="css/style.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <style type="text/css" media="screen">
    body {
        background-color: rgba(80, 255, 255, 0.288);
    }
</style>
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
    <body>
                    <div class="span9">
                        <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Student Details</h3>
                            </div>
                            <div class="module-body">
                        <?php
                            $rno=$_GET['id'];
                            $sql="select * from student where sroll='$rno'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();    
                            
                                $sname=$row['sname'];
                                $semail=$row['semail'];
                                $snum=$row['snum'];


                                echo "<b>Name: </b> ".$sname."<br><br>";
                                echo "<b>Roll No: </b> ".$rno."<br><br>";
                                echo "<b>Email Id: </b> ".$semail."<br><br>";
                                echo "<b>Mobile No: </b> ".$snum."<br><br>"; 
                            ?>
                            
                        <a href="student.php" class="btn btn-primary">Go Back</a>                             
                               </div>
                           </div>
                        </div>
                    </div>
                    <!--/.span9-->

                </div>
            </div>
            <!--/.container-->
        </div>
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2022 R.SUBHAM </b>All rights reserved.
            </div>
        </div>
        
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>

</html>


<?php }
 ?>