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
    <style type="text/css" media="screen">
    body {
        background-color: rgba(80, 255, 255, 0.288);
    }   </style>
    <body>
                    <div class="span9">
                        <center>
                        <a href="issue_requests.php" class="btn btn-info">Issue Requests</a>
                        <a href="return_requests.php" class="btn btn-info">Return Requests</a>
                        </center>
                        <h1><i>Issue Requests</i></h1>
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th><b>Roll Number</b></th>
                                      <th><b>Book Number</b></th>
                                      <th><b>Book Name</b></th>
                                      <th><b>Availabilty</b></th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                            $sql="select * from record,book where Date_of_Issue is NULL and record.Booknumber=book.Booknumber order by req_date";
                            $result=$con->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $booknumber=$row['booknumber'];
                                $sroll=$row['sroll'];
                                $bookname=$row['bookname'];
                                $avail=$row['bookavailable'];
                            
                                
                            ?>
                                    <tr>
                                      <td><b><?php echo strtoupper($sroll) ?></b></td>
                                      <td><?php echo $booknumber ?></td>
                                      <td><?php echo $bookname ?></td>
                                      <td><?php echo $avail ?></td>
                                      <td><center>
                                        <?php
                                        if($avail > 0)
                                        {echo "<a href=\"accept.php?id1=".$booknumber."&id2=".$sroll."\" class=\"btn btn-success\">Accept</a>";}
                                         ?>
                                        <a href="reject.php?id1=<?php echo $booknumber ?>&id2=<?php echo $sroll ?>" class="btn btn-danger">Reject</a>
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