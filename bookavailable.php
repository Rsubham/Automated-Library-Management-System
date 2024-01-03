<!-- PHP code to establish connection with the localserver -->
<?php
session_start();
?>
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'mca_cs_library';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM book ORDER BY bookavailable DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<?php
include "nav.php";
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <title>Welcome to MCA/CS Library RU</title>

    <style>
.t1 {

    border-collapse: collapse;
	margin-top: 8px;
    margin-left: auto;
	margin-right: auto;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 700px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.t1 thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.t1 th,
.t1 td {
    padding: 12px 15px;
}
.t1 tbody tr {
    border-bottom: 1px solid #dddddd;
}

.t1 tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.t1 tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.t1 tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
    </style>
    
</head>

<style type="text/css" media="screen">
    body {
        background-color: rgba(65, 215, 140, 0.263);
    }
</style>

<body background-color:red>

        
    <section>
		<table class="t1">
			<tr>
				<th>BOOK NAME</th>
				<th>BOOK NO.</th>
				<th>AUTHOR NAME</th>
				<th>PUBLISHER</th>
                <th>YEAR</th>
				<th>UNIT AVAILABLE</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
                    $bookavailable=$rows['bookavailable'];

			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['bookname'];?></td>
				<td><?php echo $rows['booknumber'];?></td>
				<td><?php echo $rows['authorname'];?></td>
				<td><?php echo $rows['publisher'];?></td>
                <td><?php echo $rows['year'];?></td>
				<td></center>
                  <?php 
                  if($rows['bookavailable'] > 0)
                     echo "<font color=\"black\">$bookavailable</font>";
                   else
                       echo "<font color=\"red\">NOT AVAILABLE</font>";

                        ?></td></center>
			</tr>
			<?php
				}
			?>
		</table>
	</section>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
     integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
     crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
     integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
     crossorigin="anonymous"></script>

</body>

</html>