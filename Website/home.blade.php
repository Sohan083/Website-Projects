<?php  
session_start();
if(!isset($_SESSION['admin']))
{
    if(isset($_COOKIE['uname']))
{
    $_SESSION['username']=$_COOKIE['uname']; 
    $_SESSION['pass']=$_COOKIE['pass'];
   setcookie('uname', $_SESSION['username'], time()+100, '/');
    setcookie('pass', md5($_SESSION['pass']), time()+100, '/');
   
}
else 
{
    session_destroy();
}
}
?>  
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/home.css" />
    <title>World's School</title>
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
<?php if(empty($_SESSION['username']) && empty($_SESSION['admin']))
{
    echo "<form action='adminlogin.php'>
        <button id='insbtn'>
            Admin Login
        </button>
    </form>";
} ?>
    
    
    <div class="imgcontainer1">

        <img src="image/1.png" alt="Avatar1" class="avatar1" id="av1">
        <img onclick="drop()" src="image/darrow.png" alt="darrow" class="darrow" id="da1">
        <div id="logout" class="dropdown">
        <ul>
            <?php
            if(!empty($_SESSION['username']))
                echo "<li>
                <a href='profile.blade.php' id='pro'>My Profile</a>
            </li>";
            elseif (!empty($_SESSION['admin'])) {
                echo "<li>
                <a href='admin.php' id='pro'>My Profile</a>
            </li>";;
            }
            ?>
            
            
            <li><a href="logout.php" id="l" name="logout" value="logout">Logout</a></li>
        </ul>
        </div>
    </div>
    
    <script type="text/javascript">
        function drop() {
        var p=document.getElementById("logout");
        if(p.style.display=='none')
        p.style.display='block';
        else
            p.style.display='none';
    } 
    </script>
    <div class="btn1" id="b1">
        <a href="login.php" class="loginbtn" >
            <span onclick="document.getElementById('modal-wrapper').style.display='block'" class="content1" >Login</span>
        </a>
    </div>

    <script type="text/javascript">
        // If user clicks anywhere outside of the modal, Modal will close

        var modal = document.getElementById('modal-wrapper2');
        window.onclick = function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            }
    </script>

    <div class="btn2" id="b2">
        <form  method="GET">
            <a href="signup.blade.php" class="signbtn">
                <span onclick="document.getElementById('modal-wrapper2').style.display='block'" class="content2">Sign Up</span>
            </a>
        </form>
    </div>
    <?php 
        if(!empty($_SESSION['username']) || !empty($_SESSION['admin']))
        {
            echo "<script type='text/javascript'>
            
            var bt=document.getElementById('b1');
            bt.style.display='none';
            bt=document.getElementById('b2');
            bt.style.display='none';
            var p=document.getElementById('av1');
            p.style.display='block';
            p=document.getElementById('da1');
            p.style.display='block';
            var m=document.getElementById('modal-wrapper');
            m.style.display='none';
            /*var m1=document.getElementById('logout');
            m1.style.display='block';*/
    </script>";
        }
        else
        {
            echo "<script type='text/javascript'>
        var p=document.getElementById('av1');
            p.style.display='none';
            p=document.getElementById('da1');
            p.style.display='none';
            var m=document.getElementById('logout');
            m.style.display='none';
            var bt=document.getElementById('b1');
            bt.style.display='block';
            bt=document.getElementById('b2');
            bt.style.display='block';
    </script>";
        }
     ?>

    <script type="text/javascript">
       var modal = document.getElementById('modal-wrapper');
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }

    </script>


</div>



<div class="back">
    <img id="bimg" src="image/b1.jpg">
    <p>
        World's School
    </p>
</div>

<div class="back">
    <img id="bimg" src="image/b4.jpg">
    <p>
        Offering 100 of Courses!
    </p>
</div>

<div class="back">
    <img id="bimg" src="image/bb.jpg">
    <p>
        Fully free for learning!
    </p>
</div>


<script>
    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("back");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 3000);
    }
</script>


<div class="details1">

    <div class="courses">
        <p id="online_courses">100 online Courses</p>
        <p id="learn_as">Learn as you wish</p>
    </div>
    <div class="instructors">
        <p id="expert_inst">Expert Instructors</p>
        <p id="find_inst">Find the right instructor for you</p>
    </div>
    <div class="free">
        <p id="free_access">Free access</p>
        <p id="learn_free">Learn everything for free</p>
    </div>
</div>

<div class="developmentq">
    <p style="font-size: 30px">Top Courses in "Development"</p>
</div>
<a href="html.php?tag=html" id="ref">
<div class="development1" id="dev">
    <form action="html.php" method="get" onclick="html.php">
        <img src="image/html.jpg" id="devpic">
        <p id="devq">Start Web Development with HTML</p>
        <p id="deva">Shishir Ahammed</p>
    </form>
</div>
</a>
<a href="html.php?tag=css" id="ref">
<div class="development2" id="dev">
    <form action="css.php" method="get" onclick="css.php">
        <img src="image/css.jpg" id="devpic">
        <p id="devq">Design Web via CSS- a complete guide CSS</p>
        <p id="deva">Rony Ahammed</p>
    </form>
</div>
</a>
<a href="html.php?tag=js" id="ref">
<div class="development3" id="dev">
    <form action="js.php" method="get" onclick="js.php">
        <img src="image/js.jpg" id="devpic">
        <p id="devq">A complete guide for JavaScript</p>
        <p id="deva">Sohanur Rahman</p>
    </form>
</div>
</a>
<a href="html.php?tag=php" id="ref">
<div class="development4" id="dev">
    <form action="php.php" method="get" onclick="php.php">
        <img src="image/php.jpg" id="devpic">
        <p id="devq">Become master of PHP-A complete guide for PHP</p>
        <p id="deva">Sohanur Rahman</p>
    </form>
</div>
</a>
<div class="developmentq">
    <p style="font-size: 30px">Top Courses in "Language"</p>
</div>
<a href="html.php?tag=c" id="ref">
<div class="development1" id="dev">
    <form>
        <img src="image/c.jpg" id="devpic">
        <p id="devq">Start programming with C -A course for beginer</p>
        <p id="deva">Shishir Ahammed</p>
    </form>
</div>
</a>
<a href="html.php?tag=cpp" id="ref">
<div class="development2" id="dev">
    <form>
        <img src="image/cpp.jpg" id="devpic">
        <p id="devq">Learn Deep of C++ -An advance course for C++</p>
        <p id="deva">Rony Ahammed</p>
    </form>
</div>
</a>
<a href="html.php?tag=java" id="ref">
<div class="development3" id="dev">
    <form>
        <img src="image/java.jpg" id="devpic">
        <p id="devq">Learn Java-A beginer guide for Java</p>
        <p id="deva">Sohanur Rahman</p>
    </form>
</div>
</a>
<a href="html.php?tag=py" id="ref">
<div class="development4" id="dev">
    <form>
        <img src="image/py.jpg" id="devpic">
        <p id="devq">Become Boss of Python-A complete guide for Python</p>
        <p id="deva">Sohanur Rahman</p>
    </form>
</div>
</a>
<div id="un">
        <p><?php if (!empty($_SESSION['username'])) {
        echo $_SESSION['username'];
    } 
    elseif (!empty($_SESSION['admin'])) {
        echo $_SESSION['admin'];
    }
    ?></p>
    </div>


<a href="showcourse.php" style="position: absolute;margin: 15px 0px 0px 1233px;font-size: 20px;text-decoration: none;" >Show all</a>
<?php 
    include 'footer.php';
 ?>
</body>
</html>