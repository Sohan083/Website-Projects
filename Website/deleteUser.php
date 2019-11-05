<?php 

include 'dbConnection.php';
$id = $_POST['did'];

$sql = "DELETE FROM student WHERE username ='$id'";
if(mysqli_query($conn,$sql))
{
	echo 1;
}
else
echo 0;
 ?>