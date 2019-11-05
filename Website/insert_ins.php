 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="css/insert.css" />
 </head>
 <body>
	 <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "web";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$em=$_POST['email'];
	$p=$_POST['pass'];
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$vn=$_POST['vname'];
	$h=$_POST['ht'];

	$sql = "INSERT INTO instructor 
	VALUES ('$em','$p','$fn','$ln','$vn','$h')";

	if ($conn->query($sql) === TRUE) {
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	?> 
	<p id="msg">
		You are successfully bacome Instructor :) Please login
	</p>
	<a href="home.blade.php" id="lin">Click Here</a>
 </body>
 </html>
 