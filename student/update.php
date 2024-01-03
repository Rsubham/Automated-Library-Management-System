<?php
session_start();
?>

<?php
require('DBConnectionadd.php');
?>

<?php
if(isset($_POST['submit']))
{
    $sname=$_POST['sname'];
    $sroll=$_POST['sroll'];
    $semail=$_POST['semail'];
    $snum=$_POST['snum'];
    $spass=$_POST['spass'];

$sql="update student set sname='$sname', semail='$semail', snum='$snum', spass='$spass' where sroll='$sroll'";



if($con->query($sql) === TRUE){
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=index.php", true, 303);
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
}
?>