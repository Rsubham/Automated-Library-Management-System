<?php
session_start();
require('DBConnectionadd.php');
$booknumber=$_GET['id'];

$sroll=$_SESSION['sroll'];
$sql="insert into returnbook (sroll,booknumber) values ('$sroll','$booknumber')"; 
if($con->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Request Sent.')</script>";
header( "Refresh:0.01; url=current.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header( "Refresh:0.01; url=current.php", true, 303);

}




?>