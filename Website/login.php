<?php  
session_start();
?>  
  
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        html {
     height: 100%;
    background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
    background-size: 400% 400%;
    -webkit-animation: Gradient 15s ease infinite;
    -moz-animation: Gradient 15s ease infinite;
    animation: Gradient 15s ease infinite;
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

a:link
{
    color: white;
}

input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size:16px;
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 20px;
    border: none;
    cursor: pointer;
    width: 90%;
    font-size:20px;
}
button:hover {
    opacity: 0.8;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px -96px;
    position: relative;
}
.avatar {
    width: 170px;
    height: 165px;
    border-radius: 50%;
    margin: 8px 0px 0px 95px;
}


.modal {
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 90%;
}


.modal-content {
    background-color: rgb(0,0,0,0.4);
    margin: 55px auto 15% auto;
    border: 1px solid #888;
    width: 355px;
    padding-bottom: 490px;
    height: 28px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
}

.close {
    position: absolute;
    right: -90px;
    top: -35px;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}


.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}


    </style>



    <title>Login</title>
</head>
<body> 
    <div id="modal-wrapper" class="modal" >

        <form class="modal-content animate" action="login.php" method="post">

            <div class="imgcontainer">
                <img src="image/1.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <input type="text" placeholder="Enter Username"  id="uname" name="uname" required="" value="<?php if(isset($_COOKIE['uname']))echo $_COOKIE['uname'] ?>">
                <input type="password" placeholder="Enter Password" id="pword" name="pass" required="">
                <button type="submit"   id="logging" onclick="hide1()" name="log" value="login">Login</button>
                <input type="checkbox" style="margin:26px 30px;" name="rememberme" value="1"> Remember me
                <a href="signup.blade.php" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Not Signed Up ?</a>

            </div>

        </form>

    </div>
    <?php
     $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";
    
    $conn = mysqli_connect("localhost","root","","web");
    $message="";
    if(isset($_POST['log'])) {
        $result = mysqli_query($conn,"SELECT * FROM student WHERE username='" . $_POST["uname"] . "' and pass = '". $_POST["pass"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["username"] = $row['username'];
        $_SESSION['pass']=$row['pass'];
        if(!$_SESSION['username'])  
        {  
            header("Location: login.php");
        }  
        else 
            {
                if (isset($_POST['rememberme'])) {
                    setcookie('uname', $_POST['uname'], time()+30, '/');
                    setcookie('pass', md5($_POST['pass']), time()+30, '/');
                
                    }
                header("Location: profile.blade.php");
            }
        } else {
            $u=$_POST['uname'];
            $result=mysqli_query($conn,"SELECT * FROM student WHERE username='$u'");
              $row  = mysqli_fetch_array($result);
        if(is_array($row)) 
        {
                echo "<script type='text/javascript'>
        alert('Incorrect Passwoard');
    </script>";
        } 
        else
        {
            echo "<script type='text/javascript'>
        alert('Incorrect Username');
    </script>";
        }
        $message = "Invalid Username or Password!";
        }
    }

    ?>
    
</body>
</html>