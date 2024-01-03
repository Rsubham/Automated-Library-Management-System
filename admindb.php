<?php

include('DBConnectionadd.php');
session_start();

$userid = $_POST['userid'];  
$password = $_POST['password'];  
  
    //to prevent from mysqli injection  
    $userid = stripcslashes($userid);  
    $password = stripcslashes($password);  
    $userid = mysqli_real_escape_string($con, $userid);  
    $password = mysqli_real_escape_string($con, $password);  
  
    $sql = "select *from admin where userid = '$userid' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    $_SESSION['userid'] = $userid;
    if($count == 1){  
      
      echo '<script>alert("Login  Successful")
      </script>';
      header('location:admin/index.php');
   
      
  }  
  else{    
    echo '<script>alert("Invalid User ID or Password")
    location.assign("\adminlogin.php");
    </script>';
   
   
  }     

?>