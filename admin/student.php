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
    
    <body>

                    <div class="span9">
                        <form class="form-horizontal row-fluid" action="student.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Search"><b>Search:</b></label>
                                            <div class="controls">
                                                <input type="text" id="sname" name="sname" placeholder="Enter Name/Roll No of Student" class="span8" required>
                                                <button type="submit" name="submit"class="btn">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <?php
                                    if(isset($_POST['submit']))
                                        {$s=$_POST['sname'];
                                            $sql="select * from student where (sroll like '%$s%' or sname like '%$s%')";
                                        }
                                    else
                                        $sql="select * from student where sroll<>'ADMIN'";

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
                                      <th>Name</th>
                                      <th>Roll No.</th>
                                      <th>Email id</th>      
                                      <th>Mobile</th>                                                                      
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                    <?php
                            
                            //$result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {

                                $sname=$row['sname'];
                                $sroll=$row['sroll'];
                                $semail=$row['semail'];
                                $snum=$row['snum'];
                            ?>
                                    <tr>
                                      <td><?php echo $sname ?></td>
                                      <td><?php echo $sroll ?></td>
                                      <td><?php echo $semail ?></td>         
                                      <td><?php echo $snum ?></td>                                                                   
                                        <td>
                                        <center>
                                            <a href="studentdetails.php?id=<?php echo $sroll; ?>" class="btn btn-success">Details</a>
                                            <a href="remove_student.php?id=<?php echo $sroll; ?>" class="btn btn-danger">Remove</a>
                                      </center>
                                        </td>
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