<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="css/signup.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>

    <script type="text/javascript" src="js/signup.js"> </script>
    <title>
        Signup
    </title>
</head>

<body>
<div class="logo">
    <form action="home.blade.php">
        <a href="home.blade.php" id="link"><p>World's School</p></a>
    </form>
</div>
    <div class="searchbar">
        <form action="searchresult.php" method="POST">
            <input type="text" placeholder="Search for courses"
            maxlength="20" id="search" name="se">
            <input type="submit" value="Go" id="searchbtn">
        </form>
    </div>

    <form action="adminlogin.php">
        <button id="insbtn">
            Admin Login
        </button>
    </form>

<div class="signup" >
    
    <form id="msform" action="insert.php" method="post">
        
        <ul id="progressbar">
            <li class="active">Account Setup</li>
            <li>Social Profiles</li>
            <li>Personal Details</li>
        </ul>
        
     
        <fieldset>
            <h1 class="fs-title" style="font-size: 22px">Create your account</h1>
            <h2 class="fs-subtitle">This is step 1</h2>
            <input type="text" name="username" placeholder="Username" required="" id="n" onkeyup="checkAvailability()" />
            <p id="ch" style="margin: -67px 0px 0px 493px;position: absolute;"></p>
            <input type="email" name="email" placeholder="Email" required="" id="e" />
            <input type="password" name="pass" placeholder="Password" required="" id="p" />
            <input type="password" name="cpass" placeholder="Confirm Password" required="" id="cp" />
            <input type="button" id="n" name="next" class="next action-button" value="Next" id="bt" />
        </fieldset>

        <fieldset>
            <h2 class="fs-title">Social Profiles</h2>
            <h3 class="fs-subtitle">Your presence on the social network</h3>
            <input type="text" name="twitter" placeholder="Twitter" />
            <input type="text" name="facebook" placeholder="Facebook" />
            <input type="text" name="gplus" placeholder="Google Plus" />
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle">We will never sell it</h3>
            <input type="text" name="fname" placeholder="First Name" required="" />
            <input type="text" name="lname" placeholder="Last Name" required="" />
            <input type="text" name="vname" placeholder="University Name" required="" />
            <input type="text" name="home" placeholder="Home Town" required="" />
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class="submit action-button" value="Submit"  />
           
            
        </fieldset>
    </form>
</div>

<script type="text/javascript">
    
function checkAvailability() {
jQuery.ajax({
url: "check_availability.php",
data:'username='+$("#n").val(),
type: "POST",
success:function(data){
$("#ch").html(data);
},
error:function (){}
});
}
</script>

</body>

</html>