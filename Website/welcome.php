    <?php  
    session_start();  
    $cookie_name = $_SESSION['username'];
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (60), "/");
    if(!$_SESSION['username'])  
    {  
        header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
    }  
    else header("Location: profile.blade.php");
        $_SESSION['admin']=1;
    ?>  