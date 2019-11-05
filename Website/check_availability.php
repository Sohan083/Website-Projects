<?php
include 'dbConnection.php';

if(!empty($_POST["username"])) {
  $query = "SELECT * FROM student WHERE username='" . $_POST["username"] . "'";
 $r=mysqli_query($conn,$query);
 if($ro=mysqli_fetch_array($r))
 {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }
  else{
      echo "<span class='status-available'  style='color: green;'> Username Available.</span>";
  }
}
?>