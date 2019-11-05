<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body>
<?php  
include 'menu.php';
 ?>

<div id="wel">
<p style="font-size: 60px;">Welcome Admin :) </p>

<p style="font-size: 45px;margin: 15px 0px 0px 142px;"><?php echo $_SESSION['admin']; ?></p>

<p style="font-size: 30px;margin:15px 0px 14px 20px;">You have lot of works to do!</p>
<a href="showUser.php" style="font-size: 30px; text-decoration: none; margin:15px 0px 0px 20px;">Check & Manage our users</a>
</div>
    
<?php include 'footer.php' ?>
</body>
</html>


