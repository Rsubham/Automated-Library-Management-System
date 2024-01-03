<?php
session_start();
require('DBConnectionadd.php');
include "nav.php";
include "menu.php";
if (!$_SESSION['userid']) {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";

}
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
                    <div class="span9">
                        <div class="module">
                            <div class="module-head">
                                <h3>Update Details</h3>
                            </div>
                            <div class="module-body">


                                <?php
                                $booknumber=$_GET['id'];
                                $sql="select * from book where booknumber='$booknumber'";
                                $result=$con->query($sql);
                                $row=$result->fetch_assoc();

                                $bookname=$row['bookname'];
                                $booknumber=$row['booknumber'];
                                $authorname=$row['authorname'];
                                $publisher=$row['publisher'];
                                $year=$row['year'];
                                $avail=$row['bookavailable'];
                                ?>    
                    			
                                <br >
                                    <form class="form-horizontal row-fluid" action="edit_book_details.php?id=<?php echo $booknumber ?>" method="post">
                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="bookname">Book Name:</label></b>
                                            <div class="controls">
                                                <input type="text" id="bookname" name="bookname" value= "<?php echo $bookname?>" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="booknumber">Book Number:</label></b>
                                            <div class="controls">
                                                <input type="text" id="booknumber" name="booknumber" value= "<?php echo $booknumber?>" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="authorname">Author:</label></b>
                                            <div class="controls">
                                                <input type="text" id="authorname" name="authorname" value= "<?php echo $authorname?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="publisher">Publisher:</label></b>
                                            <div class="controls">
                                                <input type="text" id="publisher" name="publisher" value= "<?php echo $publisher?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="year">Year:</label></b>
                                            <div class="controls">
                                                <input type="text" id="year" name="year" value= "<?php echo $year?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="bookavailable">Availability:</label></b>
                                            <div class="controls">
                                                <input type="text" id="bookavailable" name="bookavailable" value= "<?php echo $avail?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn">Update Details</button>
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
        <?php
if(isset($_POST['submit']))
{
    $booknumber = $_GET['id'];
    $bookname=$_POST['bookname'];
    $booknumber=$_POST['booknumber'];
    $authorname=$_POST['authorname'];
    $publisher=$_POST['publisher'];
    $year=$_POST['year'];
    $avail=$_POST['bookavailable'];
$sql="update book set bookname='$bookname', booknumber='$booknumber', authorname='$authorname', Publisher='$publisher', Year='$year', bookavailable='$avail' where booknumber='$booknumber'";

if($con->query($sql) === TRUE){
    echo '<script>alert("Book Details Edited Successfully")
    location.assign("book.php");
    </script>';
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
}
?>
      
    </body>

</html>