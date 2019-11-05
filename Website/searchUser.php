<?php 
session_start();

include 'dbConnection.php';
$searchName = urldecode(filter_var(trim($_GET['q']))); 
$query = "SELECT * FROM `student` WHERE (`username` LIKE '%{$searchName}%')";  
$result = mysqli_query($conn,$query);
$count = 0;
while($row = mysqli_fetch_array($result))
    {
    	$count++;
        $u=$row['username'];
        $e=$row['email'];
        $vn= $row['vname'];
        $t=$row['twitter'];
        $f=$row['facebook'];
        $gp=$row['gplus'];
        $fn=$row['fname'];
        $ln=$row['lname'];
        $p=$row['pass'];
        $h=$row['home'];
        $img = $row['imglink']; 
  ?>
  <div id="show" class="showw" style="padding: 0px 0px 50px 0px;">
<fieldset style="width:500px;height:500px;" id="f">
    <legend align="center"><p style=" font: bold;font-weight: bolder;font-style: italic;color: #FFA055;
    " id="legend">User Id : <?php echo $u;?> </p></legend>
    

    <span class="delete"  id='del_<?php echo $u;?>'>
      <button style=" width: 30px;height: 30px;"><img src="image/del.png" id="delimg"></button>
    </span>
  <div class="userdiv"> 
  <div class="imagediv">
    <img src="<?php echo $img;?>" id="pic">
  </div>


  <div class="infodiv">
    <h3>User's Profile:</h3>
  <p class="information">

    <?php
        
        echo "Name of the User : ".$row['username']."<br>";
        echo "Email : ".$row['email']."<br>";
        echo "twitter Account : "."<a href='http://www.twittter.com/' style='text-decoration: none;'".$row['twitter'].">twitter.com/".$row['twitter']."</a><br>";
        echo "Facebook Account : "."<a href='http://www.facebook.com/' style='text-decoration: none;'".$row['facebook'].">facebook.com/".$row['facebook']."</a><br>";
        echo "Google+ Account : "."<a href='http://www.googleplus.com/' style='text-decoration: none;'".$row['gplus'].">googleplus.com/".$row['gplus']."</a><br>";
        echo "Homedistrict : ".$row['home']."<br>";

   ?>
  </p></div>

  </div>
</fieldset>
</div>

<?php
}
if($count == 0)
{
	echo "No Result Found!";
}
?>

