<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		html {
     height: 100%;
    background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
    background-size: 400% 400%;
    -webkit-animation: Gradient 20s ease infinite;
    -moz-animation: Gradient 20s ease infinite;
    animation: Gradient 20s ease infinite;
}

@-webkit-keyframes Gradient {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}

@-moz-keyframes Gradient {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}

@keyframes Gradient {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}

.content
{
	background-color: rgb(0,0,0,0.4);
width: 650px;
margin: 80px 0px 0px 373px;
height: 650px;
display: block;
border-radius: 3px;
box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
}
#box tr td input
{
	width: 435px;
height: 25px;
}
#box tr td
{
	font-size: 16px;
}
#box tr td
{
	padding: 7px 0px 0px 0px;
}
#update 
{
    background: #27AE60;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 1px;
    cursor: pointer;
    height: 22px;
    margin: 0px 0px 0px 110px;

}
#update:hover, #update:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
#box
{
	margin: 0px auto;
}
#msg
{
	display: none;
	position: absolute;
	margin: 185px 0px 0px 545px;
	font-size: 27px;
}
	</style>

	
	<title>Edit Profile</title>
</head>
<body>
<?php include 'menu.php' ?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "web";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$flag=0;
	$em='';
	$p='';
	$vn='';
	$t='';
	$f='';
	$gp='';
	$fn='';
	$ln='';
	$p='';
	$sql="SELECT * FROM  student WHERE username='".$_SESSION['username']."'";
	$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($query))
    {
        $vn= $row['vname'];
        $t=$row['twitter'];
        $f=$row['facebook'];
        $gp=$row['gplus'];
        $fn=$row['fname'];
        $ln=$row['lname'];
        $p=$row['pass'];
        $h=$row['home'];                         
    }
	$conn->close();

	?> 
<div class="content" id="content">
	<form id="form" class="cform" method="post" action="edit.php"> 
		<table id="box">
			<tr>
				<td>Varsity name:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="vnam" value='<?php echo $vn; ?>' id="vname">
				</td>
			</tr>
			<tr>
				<td>Twitter:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="twitte" value='<?php echo $t; ?>' id="twitter">
				</td>
				
			</tr>
			<tr>
				<td>Facebook:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="faceboo" value='<?php echo $f; ?>' id="facebook">
				</td>
				
			</tr>
			<tr>
				<td>Google Plus:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="gplu" value='<?php echo $gp; ?>' id="gplus">
				</td>
				
			</tr>
			<tr>
				<td>First Name:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="fnam" value='<?php echo $fn; ?>' id="fname">
				</td>
				
			</tr>
			<tr>
				<td>Last Name:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="lnam" value='<?php echo $ln; ?>' id="lname">
				</td>
				
			</tr>
			<tr>
				<td>Home Town:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="hom" value='<?php echo $h; ?>' id="home">
				</td>
				
			</tr>
			<tr>
				<td>Password:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="pas" value='<?php echo $p; ?>' id="pass">
				</td>
				
			</tr>
			<tr>
				<td>Confirm Password:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="" value='<?php echo $p; ?>' id="cpass">
				</td>
				
			</tr>

		</table>
		<button type="submit" name="update" id="update">Update</button>
	</form>
</div>


</body>
</html>