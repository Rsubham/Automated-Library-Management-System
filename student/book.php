<?php
session_start();
require('DBConnectionadd.php');
include 'nav.php' ;
include 'menu.php' ;
?>


<?php 
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
        <link type="text/css" href="css/style.css" rel="stylesheet">
    </head>
    <style>
.span9 {
    margin-top: -80px;
}
.t1 {

    border-collapse: collapse;
	margin-top: -40px;
    margin-left: auto;
	margin-right: auto;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 700px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.t1 thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.t1 th,
.t1 td {
    padding: 12px 14px;
    text-align: center;
}
.t1 tbody tr {
    border-bottom: 1px solid #dddddd;
}

.t1 tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.t1 tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.t1 tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
    </style>
    <body>
                    <div class="span9">
                    <form class="form-horizontal row-fluid" action="book.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Search"><b>Search:</b></label>
                                            <div class="controls">
                                                <input type="text" id="bookname" name="bookname" placeholder="Enter Name/Number of Book" class="span8" required>
                                                <button type="submit" name="submit"class="btn">Search</button>
                                            </div>
                                        </div>
                                    </form>

                                    <br>
                                    <?php
                                    if(isset($_POST['submit']))
                                        {   $s=$_POST['bookname'];
                                            $sql="select * from book where booknumber='$s' or bookname like '%$s%' or booknumber like '%$s%'";
                                        }
                                    else
                                        $sql="select * from book order by bookavailable DESC";

                                    $result=$con->query($sql);
                                    $rowcount=mysqli_num_rows($result);

                                    if(!($rowcount))
                                        echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                                    else
                                    {

                                    
                                    ?>
                        <table class="t1" id = "tables">
                        <thead>
                                    <tr>
                                    <th>BOOK NAME</th>
                    				<th>BOOK NO.</th>
                    				<th>AUTHOR NAME</th>
	                    			<th>PUBLISHER</th>
                                    <th>YEAR</th>
                                    <th>AVAILABILITY</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                            
                            //$result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $bookname=$row['bookname'];
                                $booknumber=$row['booknumber'];
                                $authorname=$row['authorname'];
                                $publisher=$row['publisher'];
                                $year=$row['year'];
                                $avail=$row['bookavailable'];
                            ?>
                                    <tr>
                                      <td><?php echo $bookname ?></td>
                                      <td><?php echo $booknumber ?></td>
                                      <td><?php echo $authorname ?></td>
                                      <td><?php echo $publisher ?></td>
                                      <td><?php echo $year ?></td>
                                      <td><b><?php 
                                           if($avail > 0)
                                              echo "<font color=\"green\">$avail</font>";
                                            else
                                            	echo "<font color=\"red\">NOT AVAILABLE</font>";

                                                 ?>
                                                 	
                                                 </b></td>

                                                 <td><center><a href="bookdetails.php?id=<?php echo $booknumber; ?>" class="btn btn-primary">Details</a>
                                      	<?php
                                      	if($avail > 0)
                                      		echo "<a href=\"issue_request.php?id=".$booknumber."\" class=\"btn btn-success\">Issue</a>";
                                        ?>
                                        </center></td>

                                    </tr>
                               <?php }} ?>
                               </tbody>
                                </table>
                            </div>
                    <!--/.span3-->
                    <!--/.span9-->
                
                    <!--/.span3-->
                    <!--/.span9-->
                </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->

        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2022 R.SUBHAM </b>All rights reserved.
            </div>
        </div>
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