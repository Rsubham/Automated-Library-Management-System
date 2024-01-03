<?php
require('DBConnectionadd.php');
$sroll=$_GET['id'];
$sql="delete from student where sroll='$sroll'";

if($con->query($sql) === TRUE){
    echo '<script>alert("Student Removed Successfully")
    location.assign("student.php");
    </script>';
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}

?>