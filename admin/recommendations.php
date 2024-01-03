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
    </head>
    <style>
        body {
        background-color: rgba(80, 255, 255, 0.288);
    }
    </style>
    <body>
                    <div class="span9">
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Book Name</th>
                                      <th>Description</th>
                                      <th>Sent By</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                            $sql="select * from recommendations";
                            $result=$con->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $bookname=$row['bookname'];
                                $description=$row['description'];
                                $sroll=$row['sroll'];
                            ?>
                                    <tr>
                                      <td><b><?php echo $bookname ?></td>
                                      <td><?php echo $description?></td>
                                      <td><b><?php echo strtoupper($sroll)?></b></td>

                                    </tr>
                               <?php } ?>
                               </tbody>
                                </table>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2022 Library Management System </b>All rights reserved.
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