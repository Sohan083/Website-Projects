<!DOCTYPE html>
<html>
<head>
  <title>Users</title>
  <link rel="stylesheet" type="text/css" href="css/showUser.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
  <script type="text/javascript" src="js/showUser.js"></script>
</head>
<body>



<?php  
include 'menu.php';


?>

<script>
      function showResult(str)
      {
        var x=0;
        $(".re").html("<strong></strong>");
        if (str.length==0) { 
          $(".re").html("<strong></strong>");
          //$(".showw").remove();
          return;
        }
         //document.getElementById("show").setAttribute("id", "show2");
        if (window.XMLHttpRequest) 
        {
          xmlhttp=new XMLHttpRequest();
        }

        else 
        { 
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function() 
      {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
              document.getElementById("show1").innerHTML=xmlhttp.responseText;
          }
        }

        xmlhttp.open("GET","searchUser.php?q="+str,true);
        xmlhttp.send();

      }
</script>

 <div id="searchdiv" style="margin: 100px 0px -90px 515px;">
  <span>
    <input type="search"  onkeyup="(showResult(this.value))" id="mysearch" placeholder="Search user by userid or name"  style="width: 271px;height: 36px;">
  </span>
  
</div>
  <?php 
    $p='';
    $vn='';
    $t='';
    $f='';
    $gp='';
    $fn='';
    $ln='';
    $p='';
    $u='';
    $e='';
  include 'dbConnection.php';

    $sql="SELECT * FROM  student";
  $query = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($query))
    {
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
<div id="show1" class="re" style="padding: 122px 0px 20px 368px;">
<div id="show" class="showw" style="padding: 0px 0px 50px 0px;" >
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
</div>
<?php  

}
?>

<script type="text/javascript">
  function f()
  {
    $(".re").html("<strong></strong>");
  }

</script>
</body>
</html>