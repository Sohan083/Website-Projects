<html>
<head>
	<title></title>
	<style type="text/css">
		
		.footer
		{
			background-position: bottom;

		width: 960px;

		height: 30px;

		padding-top: 20px;

		color: #4c445a;

		font-size: 20px;

		font-family: Monotype Corsiva;

		padding-left: 343px;
		z-index: 5;
		}

	</style>
</head>
<body>
		<div class="footer">
			 <?php
			$xml=simplexml_load_file("xml/footer.xml") or die("Error: Cannot create object");
			echo "<h4>&copy;All Right Reserved, Developed By ".$xml->name."(Dept. of ".$xml->dept.", ".$xml->batch.")</h4>";
			?> 
		 	
<br><br><br>
		</div>
</body>
</html>