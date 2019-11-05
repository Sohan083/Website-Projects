<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#di
{
	margin: 105px 0px 0px 135px;
	width: 82%;
	border-left: 1px solid;
	border-top: 1px solid;
	border-right: 1px solid;
	height: 930px;
}
#v video
{
	width: 1106px;
height: 480px;

}
video {
	background: transparent url('image/html.jpg') 50% 50% / cover no-repeat ;
}
#img
{
	width: 100%;
height:400px;
}
#des
{
	margin: 0px 0px 0px 10px;
}
#register
{
	margin: 500px 0px 0px -75px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	position: absolute;
	height: 30px;
}
#lo
{
	margin: 10px 0px 0px 910px;

position: absolute;

font-style: oblique;

font-size: 19px;
}
#register:hover, #register:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
#dis
{
	margin: 810px 0px 0px 0px;
	position: absolute;
border-left: 1px solid;
background: #b2beb5;
width: 1105px;
border-top: 1px solid;
z-index: 1;
}
#text
{
	width: 350px;
height: 100px;
}

#submit
{
	margin: 2px 0px 0px 280px;
	background: #27AE60;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 1px;
    cursor: pointer;
}
#submit:hover, #submit:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
#comment
{
	margin:8px 0px 0px 747px;

}
#cmnt
{
	margin: 0px 0px 0px 20px;
	border-left: 1px solid black;
	float: none;
}
#cmnt div
{
	border-bottom: 1px solid black;
	float: none;
}
#cmnt div p
{
	margin: 10px 4px 0px 11px;
}
#pi
{
	height: 30px;
	width: 30px;
}

	</style>


	
	<title>Course</title>
</head>
<body>
	
	<?php include 'menu.php';?>
	<div id="di">
		<?php 
		$i=$_GET['tag'];
			include 'dbConnection.php';
			if(empty($_SESSION['admin']))
				if(!empty($_SESSION['username']))
			$result = mysqli_query($conn,"SELECT * FROM register WHERE username='" . $_SESSION["username"] . "' and courseid = '". $i."'");
			if((!empty($_SESSION['username']) || !empty($_SESSION['admin'])))
				{
					if(!empty($_SESSION['admin']))
					{
						echo "<div id='v'>
				<video  preload='none' controls  poster='image/"."$i".".jpg' >
				  <source src='video/"."$i".".mp4' type='video/mp4'>
				Your browser does not support the video tag.
				</video>
				</div>";
					}
					else
					{
						echo "<div id='v'>
				<video  preload='none' controls  poster='image/"."$i".".jpg' >
				  <source src='video/"."$i".".mp4' type='video/mp4'>
				Your browser does not support the video tag.
				</video>
				</div>";
					}
					
				}
			else
			{
				
				if(isset($_SESSION['username']))
				{
					echo "<img src='image/"."$i".".jpg' id='img'>
				<p id='lo'>Register to get full access</p>";
				}
				else
				{
					echo "<img src='image/"."$i".".jpg' id='img'>
				<p id='lo'><a href='login.php'>Login</a> to get full access</p>";
				}
			}
		 ?>
				
		
			
		<div id="des">
			<?php 
				if($i=='html')
				{
					echo "<h1>What is HTML?</h1>
		<p>HTML is the standard markup language for creating Web pages.</p>
		<ul>
			<li>HTML stands for Hyper Text Markup Language</li>
			<li>HTML describes the structure of Web pages using markup</li>
			<li>HTML elements are the building blocks of HTML pages</li>
			<li>HTML elements are represented by tags</li>
			<li>HTML tags label pieces of content such as 'heading', 'paragraph', 'table', and so on</li>
			<li>Browsers do not display the HTML tags, but use them to render the content of the page</li>
		</ul>
		<a href='https://www.w3schools.com/html/default.asp'>Find more</a>";
				}
				else if($i=='css')
				{
					echo "<h1>What is CSS?</h1>
		<p>CSS is the style sheet of HTML for creating Web pages.</p>
		<ul>
			<li>CSS stands for Cascading Style Sheets</li>
			<li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
			<li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
			<li>External stylesheets are stored in CSS files</li>
		</ul>
		<a href='https://www.w3schools.com/css/css_intro.asp'>Find more</a>";
				}
				else if($i=='js')
				{
					echo "<h1>What is JavaScript?</h1>
		<p>JavaScript is a cross-platform, object-oriented scripting language used to make webpages interactive</p>
		<ul>
			<li>JavaScript contains a standard library of objects, such as Array, Date, and Math, and a core set of language elements such as operators, control structures, and statements.</li>
			<li>JavaScript to program the behavior of web pages </li>
		</ul>
		<a href='https://www.w3schools.com/js/default.asp'>Find more</a>";
				}
				else if($i=='php')
				{
					echo "<h1>What is PHP?</h1>
		<ul>
			<li>PHP is an acronym for 'PHP: Hypertext Preprocessor'</li>
			<li>PHP is a widely-used, open source scripting language</li>
			<li>PHP scripts are executed on the server</li>
			<li>PHP is free to download and use</li>
		</ul>
		<a href='https://www.w3schools.com/php/php_intro.asp'>Find more</a>";
				}
				else if($i=='c')
				{
					echo "<h1>What is C language?</h1>
		<ul>
			<li>In 1988, the American National Standards Institute (ANSI) had formalized the C language.</li>
			<li>C was invented to write UNIX operating system.</li>
			<li>Linux OS, PHP, and MySQL are written in C.</li>
			<li>C has been written in assembly language.</li>
		</ul>
		<a href='https://www.w3schools.in/c-tutorial/intro/'>Find more</a>";
				}
				else if($i=='cpp')
				{
					echo "<h1>What is C++ language?</h1>
		<ul>
			<li>The main focus remains on data rather than procedures.</li>
			<li>Object-oriented programs are segmented into parts called objects.</li>
			<li>Data structures are designed to categorize the objects.</li>
			<li>Data member and functions are tied together as a data structure.</li>
		</ul>
		<a href='https://www.w3schools.in/cplusplus-tutorial/intro/'>Find more</a>";
				}
				else if($i=='java')
				{
					echo "<h1>What is Python language?</h1>
		<ul>
			<li>Java is an object-oriented programming language developed by Sun Microsystems, and it was released in 1995.</li>
			<li>Java is a set of features of C and C++. It has obtained its format from C, and OOP features from C++.</li>
			<li>Java code that runs on one platform does not need to be recompiled to run on another platform; it's called write once, run anywhere(WORA).</li>
		</ul>
		<a href='https://www.w3schools.in/java-tutorial/intro/'>Find more</a>";
				}
				else if($i=='py')
				{
					echo "<h1>What is Python language?</h1>
		<ul>
			<li>Python can be used on a server to create web applications.</li>
			<li>Python can be used alongside software to create workflows.</li>
			<li>Python can connect to database systems. It can also read and modify files.</li>
			<li>Python can be used to handle big data and perform complex mathematics.</li>
		</ul>
		<a href='https://www.w3schools.com/python/python_intro.asp'>Find more</a>";
				}
				
			 ?>
		
	</div>
	<?php 

			if(!empty($_SESSION['username']))
			{
			include 'dbConnection.php';
			$result = mysqli_query($conn,"SELECT * FROM register WHERE username='" . $_SESSION["username"] . "' and courseid = '". $i."'");
			}
        if($row = mysqli_fetch_array($result))
         {
         	if(is_array($row));
			
		}
		else if(!empty($_SESSION['username'])) echo "<a href='register.php?tag=".$i."'><button type='submit' id='register'>Register</button></a>";
	 ?>
	
	
    <?php 
    if(!empty($_SESSION['username']))
    {
    ?>
	<div id="dis">
	<table>
	<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";
    $t='';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $cid='html';
    $cmnt='';
    $sql="SELECT * FROM  comment WHERE courseid='$i'";
    $query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($query))
    {
        $cmnt=$row['comment'];
        $u=$row['username'];
    ?> 
    <tr>
    	<td ><img src='image/1.png' id='pi'></td>
    	<td style="border-bottom: 1px solid black;width: 94%;"><p><?php echo $cmnt;?></p><p>By__<?php echo $u;?></p></td>
    </tr>
    <?php  
    	}
    ?>
    </table>
    <div id='comment'>
		<form action="insertcmnt.php" method='post'>
			<input type='hidden' name='uid' value='Anonymous'>
			<input type='hidden' name='date'  value='".date('Y-m-d H:i:s')."'>
			<?php 
				if(!empty($_SESSION['username']) || !empty($_SESSION['admin']))
				{
					$_SESSION['course'] = $i;
					echo "<textarea name='message' id='text' ></textarea>
			<br><button type='submit' id='submit' name='com'>Comment</button>";
				}
			 ?>
			
		</form>
	</div>
	</div>
	<?php 
		}
	?>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>