<?php
   session_start();
?>

<?php
if(!$_SESSION['sroll']){

  echo '<script>alert("Please Login First")
    location.assign("\login.php");
    </script>';
}else{
  echo '<script>alert("Login  Successful")
  </script>';
  header('location:student/index.php');
}

  ?>

