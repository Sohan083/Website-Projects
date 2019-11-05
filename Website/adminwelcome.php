    <?php  
    session_start();  
      
    if(!$_SESSION['admin'])  
    {  
        header("Location: adminlogin.php");//redirect to login page to secure the welcome page without login access.  
    }  
    else header("Location: admin.php");
    ?>  