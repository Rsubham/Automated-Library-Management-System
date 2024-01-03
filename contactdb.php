<!DOCTYPE HTML>
<html>
<body>
 
    <?php
        include("DBConnectionadd.php");
        $name=$_POST["name"];
        $email=$_POST["email"];
        $message=$_POST["message"];
        
        $query = "insert into feedback(name,email,message) values('$name','$email','$message')"; //Insert query to add book details into the book table
        $result = mysqli_query($con,$query);

        echo '<script>alert("Feedback Sent Successful")
      location.assign("\contactus.php");
      </script>';

		
    ?>
 
 
</body>
</html>