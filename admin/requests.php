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
    <link type="text/css" href="css/style.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        .xyz{
            margin-top: 100px;
            margin-left: 500px;
        }
    </style>
        <style type="text/css" media="screen">
    body {
        background-color: rgba(80, 255, 255, 0.288);
    }
</style>
    <body>
                 <div class="xyz">
                    <div class="span3">
                        
                            <a href="issue_requests.php" class="btn btn-info" ><image width="100px" src="images/book2.png"></image><p>Issue Requests</p></a>
                        
                    </div>
                    <div class="span3">
                        
                            <a href="return_requests.php" class="btn btn-info"><image width="100px" src="images/book4.png"></image><p>Return Requests</p></a>
                        
                    </div>
                    </div>
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