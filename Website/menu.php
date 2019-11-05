<?php 
session_start();
if(!isset($_SESSION['admin']))
{
    if(isset($_COOKIE['uname']))
{
   setcookie('uname', $_SESSION['username'], time()+100, '/');
    setcookie('pass', md5($_SESSION['pass']), time()+100, '/');
   $_SESSION['username']=$_COOKIE['uname']; 
}
else 
{
    session_destroy();
}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/menu.css" />
	<title></title>
</head>
<body>
	<div class="logo">
    <form action="home.blade.php">
        <a href="home.blade.php" id="link"><p id="anim">World's School</p></a>
    </form>
</div>
<div class="menu">
    <ul class="bar">
        <li> <img src="image/Menu-512.png" id="menupic">Catagories
            <ul>
                <li>Web Development
                    <ul>
                       <?php 
                            include 'dbConnection.php';
                            $sql = "SELECT * from course where catagory = 'web'";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($result))
                            {
                                $n=$row['name'];
                                $l=$row['link'];
                               $i=$row['id'];
                                echo "<li><a href=html.php?tag="."$i".">"."$n"."</a></li>";
                            }
                         ?>
                    </ul>
                </li>
                <li>Languages
                    <ul>
                        <?php 
                            include 'dbConnection.php';
                            $sql = "SELECT * from course where catagory = 'lang'";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($result))
                            {
                                $n=$row['name'];
                                $l=$row['link'];
                                $i=$row['id'];
                                echo "<li><a href=html.php?tag="."$i".">"."$n"."</a></li>";
                            }
                         ?>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <div class="searchbar">
        <form action="searchresult.php" method="POST">
            <input type="text" placeholder="Search for courses"
            maxlength="20" id="search" name="se">
            <input type="submit" value="Go" id="searchbtn">
        </form>
    </div>
    <?php 
        if (!empty($_SESSION['username'])) {
            echo "<div class='imgcontainer1'>
        <img src='image/1.png' alt='Avatar1' class='avatar1' id='av1'>
        <img onclick='drop()' src='image/darrow.png' alt='darrow' class='darrow' id='da1'>
        <div id='logout' class='dropdown'>
        <ul>
            <li>
                <a href='profile.blade.php' id='pro'>My Profile</a>
            </li>
            
            <li><a href='logout.php' id='l' name='logout' value='logout'>Logout</a></li>
        </ul>
        </div>
    </div>";
        }

       else if (!empty($_SESSION['admin'])) {
            echo "<div class='imgcontainer1'>
        <img src='image/1.png' alt='Avatar1' class='avatar1' id='av1'>
        <img onclick='drop()' src='image/darrow.png' alt='darrow' class='darrow' id='da1'>
        <div id='logout' class='dropdown'>
        <ul>
            <li><a href='logout.php' id='l' name='logout' value='logout'>Logout</a></li>
        </ul>
        </div>
    </div>";
        } 
     ?>
    
    <script type="text/javascript">
        function drop() {
        var p=document.getElementById("logout");
        if(p.style.display=='none')
        p.style.display='block';
        else
            p.style.display='none';
    } </script>
    
   <div id="un">
        <p><?php if (!empty($_SESSION['username'])) {
        echo $_SESSION['username'];
    } 
    else if (!empty($_SESSION['admin'])) {
        echo $_SESSION['admin'];
    } ?></p>
    </div>

</div>
</body>
</html>