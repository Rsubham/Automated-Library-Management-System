<?php
session_start();
require('DBConnectionadd.php');
include "nav.php";
include "menu.php";
if(!$_SESSION['sroll']){

    echo '<script>alert("Please Login First")
      location.assign("/rsubhamlbr/login.php");
      </script>';
  }   
  else{
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="css/style.css" rel="stylesheet">

    </head>
    <style type="text/css" media="screen">
    body {
        background-color: rgba(80, 255, 255, 0.288);
    }

    .card{
    margin-top: 20px;
    }
</style>



    <body>  
                    
                    	<center>
                           	<div class="card" style="width: 50%;"> 
                    	
                    			<div class="card-body">

                                <?php
                                $sroll = $_SESSION['sroll'];
                                $sql="select * from student where sroll='$sroll'";
                                $result=$con->query($sql);
                                $row=$result->fetch_assoc();

                                $sname=$row['sname'];
                                $sroll=$row['sroll'];
                                $semail=$row['semail'];
                                $snum=$row['snum'];
                                ?>    
                    				<center><p><b>YOUR DETAILS</b></p></center>
                    				<h1 class="card-title"><center>Name: <?php echo  $sname ?></center></h1>
                    				<br>
                    				<p><b>Roll No: </B><?php echo $sroll ?></p>
                    				<br>
                    				<p><b>Email ID: </b><?php echo $semail ?></p>
                    				<br>
                    				<p><b>Mobile number: </b><?php echo $snum ?></p>
                    				</b>
                                
                    			</div>
                    		</div>
                            <br>
                            <a href="edit_student_details.php" class="btn btn-primary">Edit Details</a>    
      					</center>              	
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
<?php
  }
  ?>