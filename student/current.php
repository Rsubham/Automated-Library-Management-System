<?php
session_start();
require('DBConnectionadd.php');
include "nav.php";
include "menu.php";
if(!$_SESSION['sroll']){

    echo '<script>alert("Please Login First")
      location.assign("/rsubhamlbr/login.php");
      </script>';
  }else{    
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <link type="text/css" href="css/style.css" rel="stylesheet">
    </head>
    <body>
    
                    <!--/.span3-->
                    <div class="span9">
                        <form class="form-horizontal row-fluid" action="current.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Search"><b>Search:</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="booknumber" placeholder="Enter Book Name/Book Number." class="span8" required>
                                                <button type="submit" name="submit"class="btn">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <?php
                                    $sroll = $_SESSION['sroll'];
                                    if(isset($_POST['submit']))
                                        {$s=$_POST['booknumber'];
                                            $sql="select * from record,book where sroll = '$sroll' and Date_of_Issue is NOT NULL and Date_of_Return is NULL and book.booknumber = record.booknumber and (record.booknumber='$s' or bookname like '%$s%')";

                                        }
                                    else
                                        $sql="select * from record,book where sroll = '$sroll' and Date_of_Issue is NOT NULL and Date_of_Return is NULL and book.booknumber = record.booknumber";

                                    $result=$con->query($sql);
                                    $rowcount=mysqli_num_rows($result);

                                    if(!($rowcount))
                                        echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                                    else
                                    {

                                
                                    ?>
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Book Name</th>
                                      <th>Book Number</th>
                                      <th>Issue Date</th>
                                      <th>Due date</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                <?php

                            
                            //$result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $booknumber=$row['booknumber'];
                                $bookname=$row['bookname'];
                                $issuedate=$row['Date_of_Issue'];
                                $duedate=$row['Due_Date'];                            
                            ?>

                                    <tr>
                                      <td><?php echo $bookname ?></td>
                                      <td><?php echo $booknumber ?></td>
                                      <td><?php echo $issuedate ?></td>
                                      <td><?php echo $duedate ?></td>
                                        <td><center>

                                        <a href="return_request.php?id=<?php echo $booknumber; ?>" class="btn btn-primary">Return</a>
                                        </center></td>
                                    </tr>
                            <?php }} ?>
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

<?php } ?>