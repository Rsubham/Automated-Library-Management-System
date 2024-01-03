<?php
require('DBConnectionadd.php');

$booknumber=$_GET['id1'];
$sroll=$_GET['id2'];

$sql="update record set Date_of_Issue=curdate(),Due_Date=date_add(curdate(),interval 60 day) where booknumber='$booknumber' and sroll='$sroll'";
$result=$con->query($sql);
if($con->query($sql) === TRUE)
{
    $sql2="update book set bookavailable=bookavailable-1 where booknumber='$booknumber'";
    $result=$con->query($sql2);
    $sql3="insert into message (sroll,Msg,Date,Time) values ('$sroll','Your request for issue of booknumber: $booknumber  has been accepted',curdate(),curtime())";
    $result=$con->query($sql3);
    echo "<script type='text/javascript'>alert('Success')</script>";
    header( "Refresh:0.01; url=issue_requests.php", true, 303);
    }
    else
    {
        echo "<script type='text/javascript'>alert('Error')</script>";
        header( "Refresh:1; url=issue_requests.php", true, 303);
    
    }
?>