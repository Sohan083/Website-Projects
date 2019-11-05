<?php
	session_start();
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "web";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$p=$_POST['pas'];
	$vn=$_POST['vnam'];
	$t=$_POST['twitte'];
	$f=$_POST['faceboo'];
	$gp=$_POST['gplu'];
	$fn=$_POST['fnam'];
	$ln=$_POST['lnam'];
	$h=$_POST['hom'];
	$sql = "UPDATE student 
	set vname='$vn', twitter='$t', facebook='$f', gplus='$gp',fname='$fn', lname='$ln', pass='$p',home='$h' where username = '".$_SESSION['username']."'";

	if ($conn->query($sql) === TRUE) {
		header("Location: profile.blade.php");
	} else {
	    header("Location: profile.blade.php");
	}

	

?> 
