<?php
session_start();
session_destroy();
include('DBConnectionadd.php');
session_start();

$sroll = $_POST['sroll'];  
$spass = $_POST['spass'];  
  
    //to prevent from mysqli injection  
    $sroll = stripcslashes($sroll);  
    $spass = stripcslashes($spass);  
    $sroll = mysqli_real_escape_string($con, $sroll);  
    $spass = mysqli_real_escape_string($con, $spass);  
  
    $sql = "select *from student where sroll = '$sroll' and spass = '$spass'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    $_SESSION['sroll'] = $sroll;
    if($count == 1){  
      
      echo '<script>alert("Login Successful")
      location.assign("profile.php");
      </script>';
     
        
    }  
    else{    
      echo '<script>alert("Invalid Roll Number or Password")
      location.assign("login.php");
      </script>';
     
     
    }     

?>