<?php
session_start();
require('DBConnectionadd.php');
include "nav.php";
include "menu.php";
if ($_SESSION['userid']) {

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
                        <center>
                        <a href="issue_requests.php" class="btn btn-info">Issue Requests</a>
                        <a href="return_requests.php" class="btn btn-info">Return Requests</a>
                        </center>
                        <h1><i>Return Requests</i></h1>
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Roll Number</th>
                                      <th>Book Number</th>
                                      <th>Book Name</th>
                                      <th>Dues</th>

                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                            $sql="select returnbook.booknumber,returnbook.sroll,bookname,datediff(curdate(),Due_Date) as x from returnbook,book,record where returnbook.booknumber=book.booknumber and returnbook.booknumber=record.booknumber and returnbook.sroll=record.sroll";
                            $result=$con->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $booknumber=$row['booknumber'];
                                $sroll=$row['sroll'];
                                $bookname=$row['bookname'];
                                $dues=$row['x'] * 10;
                                
                            
                           
                            ?>
                                    <tr>
                                      <td><?php echo strtoupper($sroll) ?></td>
                                      <td><?php echo $booknumber ?></td>
                                      <td><b><?php echo $bookname ?></b></td>
                                      <td><?php 
                                      if($dues > 0)
                                          echo $dues;
                                          else
                                          echo 0; ?></td>
                                      <td><center>
                                                                                
                                        <a href="acceptreturn.php?id1=<?php echo $booknumber; ?>&id2=<?php echo $sroll; ?>&id3=<?php echo $dues ?>" class="btn btn-success">Accept</a>
                                         
                                        <a href="rejectreturn.php?id1=<?php echo $booknumber; ?>&id2=<?php echo $sroll; ?>" class="btn btn-danger">Reject</a>
                                    </center></td>
                                    </tr>
                               <?php } ?>
                               </tbody>
                                </table>
                            </div>
                    <!--/.span3-->
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2018 Library Management System </b>All rights reserved.
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
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>