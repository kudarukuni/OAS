<!DOCTYPE html>
<html>
<head><meta http-equiv="refresh" content="3"><link rel="stylesheet" type="text/css" href="style.css" media="screen"/><link rel="apple-touch-icon" sizes="180x180" href="img/fav-icons/apple-touch-icon.png"/><link rel="icon" type="image/png" sizes="32x32" href="img/fav-icons/favicon-32x32.png"/><link rel="icon" type="image/png" sizes="16x16" href="img/fav-icons/favicon-16x16.png"/><meta name="theme-color" content="#6e7833"><title> T.A.T.S </title></head>
<body><br><h1><font color="green">HABITATION</font><font color="gold"> OF </font> <font color="black">HOPE</font><font color="white"> AND </font><font color="red"> TRANSFORMATION</font> <font color="purple">CENTRE</font></h1><h2><font color="silver">Inmate Data</font></h2>
<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "oas_db";
	$con = mysqli_connect($server, $username, $password, $dbname) or die("unable to connect");
	$sql = "SELECT * FROM inmates";
	echo '  <table cellspacing = "5" cellpadding="5"><tr><th>ID</th><th>INMATE</th><th>TIME</th><th>DATE</th></tr>';
	$result=mysqli_query($con,$sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) { 
	    	$row_id = $row["id"];
	      	$row_motion = $row["inmate"];
	      	$row_time = $row["date"];
	      	$row_date = $row["time"];
	        echo '	<tr><td>' . $row_id . '</td><td>' . $row_motion . '</td><td>' . $row_time . '</td><td>' . $row_date . '</td></tr>';
		}
	}
?>
</table></body></html></body></html>