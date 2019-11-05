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
	$u=$_POST['username'];
	$em=$_POST['email'];
	$p=$_POST['pass'];
	$vn=$_POST['vname'];
	$t=$_POST['twitter'];
	$f=$_POST['facebook'];
	$gp=$_POST['gplus'];
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$h=$_POST['home'];

	$sql = "INSERT INTO student 
	VALUES ('$u','$em','$p','$vn','$t','$f','$gp','$fn','$ln','$h','adsf')";

	if ($conn->query($sql) === TRUE) {
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	?> 
	<p id="msg">
		You are successfully signed up :) Please login
	</p>
	<a href="login.php" id="lin">Click Here</a>
 </body>
 </html>
 