<?php
require('DBConnectionadd.php');

$booknumber=$_GET['id1'];
$sroll=$_GET['id2'];
$dues=$_GET['id3'];

$sql="update record set Date_of_Return=curdate(),Dues='$dues' where booknumber='$booknumber' and sroll='$sroll'";
$result=$con->query($sql);
if($con->query($sql) === TRUE)
{
    $sql2="update book set bookavailable=bookavailable+1 where booknumber='$booknumber'";
    $result=$con->query($sql2);
    $sql3="delete from returnbook where booknumber='$booknumber' and sroll='$sroll'";
    $result=$con->query($sql3);
    $sql4="insert into message (sroll,Msg,Date,Time) values ('$sroll','Your request for return of booknumber: $booknumber  has been accepted',curdate(),curtime())";
    $result=$con->query($sql4);
    echo "<script type='text/javascript'>alert('Success')</script>";
    header( "Refresh:0.01; url=issue_requests.php", true, 303);
    }
    else
    {
        echo "<script type='text/javascript'>alert('Error')</script>";
        header( "Refresh:1; url=issue_requests.php", true, 303);
    
    }
?>