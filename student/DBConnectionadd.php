<?php
//Establishing connection with the database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'mca_cs_library'); //where books is the database name
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check db connection
if($con === false){
    die("Error: connection error. " . mysqli_connect_error());
}

?>