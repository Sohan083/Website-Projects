
<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="css/profile.css" />
    <title>
        Profile
    </title>
</head>

<body>
<?php include 'menu.php';?>

<div class="full">
    <div id="para">
        <p id="prof">Profile</p>
        <a href="editprofile.php" id="ma">Manage Account</a>
     
    </div>
</div>
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
    $u=$_SESSION['username'];
    $e='';
    $img='';
    $sql="SELECT * FROM  student WHERE username='$u'";
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
        $img=$row['imglink'];                        
    }
    ?> 
<div id="cont">
   
<img src="<?php echo $img;?>" id="pic">
<div id="upimg">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <input type="file" name="uploadimage" id="image_input">
        <input type="submit" name="submit" value="Upload">
    </form>
</div>



<div class="det">
    <p id="name">Full Name: 
        <?php echo $fn;
        echo " ";
        echo $ln;?>
    </p>
    <p id="uname">User Name: 
        <?php 
        echo $u; ?>
    </p>
    <p id="email">Email: 
        <?php 
        echo $e; ?>
    </p>
    <p id="insti">Institution: 
        <?php 
        echo $vn; ?>
    </p>
    <p id="from">Home Town: 
        <?php 
        echo $h; ?>
    </p>
    
</div>
</div>
<div class="soc">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<nav class="social">
          <ul>
              <li><a href="https://twitter.com/gian_michelle">Twitter <i class="fa fa-twitter"></i></a></li>
              <li><a href="https://facebook.com/">Facebook <i class="fa fa-facebook"></i></a></li>
              <li><a href="http://dribbble.com/gian_michelle">Google+ <i class="fa fa-google-plus"></i></a></li>
          </ul>
      </nav>
    </div>

<?php 
  if(isset($_POST['submit']))
  {
    if($_FILES['uploadimage']['error'])
        {
            echo "Upload error occured<br>";
        }
        else
        {
            $imageName = time().$_FILES['uploadimage']['name'];
            $imageLink = "upload/".$imageName;
            move_uploaded_file($_FILES['uploadimage']['tmp_name'],$imageLink);
            $imageDatabaseLink = "upload/".$imageName;

            $sql = "UPDATE student set imglink='$imageDatabaseLink' where username='$u'";
            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
  }

 ?>
<div id="co">
    <p style="font-size: 21px;font-style: italic;">Your Registered Courses:</p>
    <table>
    <?php 
        $sql="SELECT * FROM  register WHERE username='".$_SESSION['username']."'";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query))
            {
            $c=$row['courseid'];
            $s="SELECT * from course where id ='".$c."'";
            $q=mysqli_query($conn,$s);
            while($r=mysqli_fetch_array($q))
            {
                 $n=$r['name'];
                $in=$r['instructor'];
                $img=$r['imglink'];
                $l=$r['link'];     

     ?>
        <tr>
            <td id="td">
                <img src="<?php echo $img;?>" id='cp'>
                <a href="<?php echo "".$l."?tag=".$c ?>"><?php echo $n; ?></a>
                <p>By__<?php echo $in;?></p>

            </td>
        </tr>
        <?php 
        }
        }
         ?>
    </table>
</div>
<?php include 'footer.php' ?>
</body>

</html>