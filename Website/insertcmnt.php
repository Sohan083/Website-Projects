<?php
session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";
    $t='';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $u=$_SESSION['username'];
    $cid=$_SESSION['course'];
    $cmnt='';
    if(!empty($_POST['message']))
    {
    	$t=$_POST['message'];
    	$sql="INSERT INTO comment VALUES ('$u', '$cid', '$t');";
    	if($conn->query($sql)==true)
    	{
            if($_SESSION['course']=='html')
    			header("location: html.php?tag=html");
            else if($_SESSION['course']=='css')
                header("location: html.php?tag=css");
            else if($_SESSION['course']=='js')
                header("location: html.php?=js");
            else if($_SESSION['course']=='php')
                header("location: html.php?tag=php");
            else if($_SESSION['course']=='c')
                header("location: html.php?tag=c");
            else if($_SESSION['course']=='cpp')
                header("location: html.php?tag=cpp");
            else if($_SESSION['course']=='java')
                header("location: html.php?tag=java");
            else if($_SESSION['course']=='py')
                header("location: html.php?tag=py");
        }
    	else
    	{
    		echo "error";
    	}
    }
    	
 
    $conn->close();

    ?> 