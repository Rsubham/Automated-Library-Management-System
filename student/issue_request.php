<?php
session_start();
require('DBconnectionadd.php');

$id=$_GET['id'];

$sroll=$_SESSION['sroll'];

$sql="insert into record (sroll,booknumber) values ('$sroll','$id')";

if($con->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
header( "Refresh:0.01; url=book.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header( "Refresh:0.01; url=book.php", true, 303);

}




?>