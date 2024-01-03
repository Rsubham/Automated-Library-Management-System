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
        <style>
  .button {

    border-radius: 4px;
    background-color: #2aa49ab1;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 17px;
    padding: 5px;
    width: 120px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    margin-left: 180px;
   
  }
  
  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  
  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
  .button:hover span {
    padding-right: 25px;
  }
  
  .button:hover span:after {
    opacity: 1;
    right: 0;
  }
  </style>
    <body>
                    <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Add Book</h3>
                            </div>
                            <div class="module-body">

                                    
                                    <br >

                                    <form class="form-horizontal row-fluid" action="addbook.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="bookname"><b>Book Name</b></label>
                                            <div class="controls">
                                                <input type="text" id="bookname" name="bookname" placeholder="Book Name" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="booknumber"><b>Book Number</b></label>
                                            <div class="controls">
                                            <input type="text" id="booknumber" name="booknumber" placeholder="Book Number" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="authorname"><b>Author</b></label>
                                            <div class="controls">
                                                <input type="text" id="authorname" name="authorname" placeholder="Author Name" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Publisher"><b>Publisher</b></label>
                                            <div class="controls">
                                                <input type="text" id="publisher" name="publisher" placeholder="Publisher" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Year"><b>Year</b></label>
                                            <div class="controls">
                                                <input type="number" id="year" name="year" placeholder="Year" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="bookavailable"><b>Number of Copies</b></label>
                                            <div class="controls">
                                                <input type="number" id="bookavailable" name="bookavailable" placeholder="Number of Copies" class="span8" required>
                                            </div>
                                        </div>
                                        
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn">Add Book</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>

                        
                        
                    </div><!--/.content-->
                </div>

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

<?php
if(isset($_POST['submit']))
{
    $bookname=$_POST['bookname'];
    $booknumber=$_POST['booknumber'];
    $authorname=$_POST['authorname'];
    $publisher=$_POST['publisher'];
    $year=$_POST['year'];
    $bookavailable=$_POST['bookavailable'];

$sql="insert into book (bookname,booknumber,authorname,publisher,Year,bookavailable) values ('$bookname','$booknumber','$authorname','$publisher','$year','$bookavailable')";

if($con->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Book Added Successfully')</script>";
}
else
{
	echo "<script type='text/javascript'>alert('Book Already Added')</script>";

}
}

?>
      
    </body>

</html>
<?php } ?>