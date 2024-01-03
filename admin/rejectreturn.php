<?php
require('DBConnectionadd.php');

$booknumber=$_GET['id1'];

$sroll=$_GET['id2'];

$sql="delete from returnbook where sroll='$sroll' and booknumber='$booknumber'";

if($con->query($sql) === TRUE)
{
	$sql1="insert into message (sroll,Msg,Date,Time) values ('$sroll','Your request for return of booknumber: $booknumber  has been rejected',curdate(),curtime())";
 $result=$con->query($sql1);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=return_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=return_requests.php", true, 303);

}




?>