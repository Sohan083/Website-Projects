    <?php       
    session_start();//session is a way to store information (in variables) to be used across multiple pages. 
    setcookie('uname',$_SESSION['username'],time()-60,'/'); 
	session_destroy(); 
    header("Location: home.blade.php");//use for the redirection to some page  
    ?>  
