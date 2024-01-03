<!DOCTYPE HTML>
<html>
<body>
 
    <?php
        include("DBConnectionadd.php");
        $sname=$_POST["sname"];
        $sroll=$_POST["sroll"];
        $semail=$_POST["semail"];
        $snum=$_POST["snum"];
        $spass= $_POST["spass"];

        $query = "insert into student(sname,sroll,semail,snum,spass) values('$sname','$sroll','$semail','$snum','$spass')"; //Insert query to add book details into the book table
        $result = mysqli_query($con,$query);

        echo '<script>alert("Registration Successful")
      location.assign("\login.php");
      </script>';

		
    ?>
 
 
</body>
</html>