<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/searchresult.css">
</head>
<body>
<?php 
include 'menu.php';
include 'dbConnection.php';
?>

<table style="margin: 190px 0px 0px 350px;">
<?php 
    $c='';
    $i='';
    $n='';
    $in='';
    $img='';
    $l='';
  include 'dbConnection.php';

    $sql="SELECT * FROM  course";
  $query = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($query))
    {
        $c=$row['catagory'];
	    $i=$row['id'];
	    $n=$row['name'];
	    $in=$row['instructor'];
	    $img=$row['imglink'];
	    $l=$row['link'];
  ?>
  					<tr>
  						<td>
					<a href='<?php echo "".$l."?tag=".$i; ?>' id="ref">
					<div class="development3" id="dev">
			   		<form  method="get"  id="fo">
				        <img src='<?php echo $img; ?>' id="devpic">
				        <p id="cat" style="padding: 0px 0px 0px 132px;font-size: 30px;"><?php if($c=='web')
				        echo "Web Development";
				        else echo "Language";?></p>
				        <p id="devq" style="padding: 0px 0px 0px 20px;font-size: 27px;"><?php echo $n;?></p>
				        <p id="deva" style="font-size: 23px;">By_<?php echo $in;?></p>
			    	</form>
			    </div>
					</a>
				</td>
				</tr>


<?php  
}
?>

</table>

<?php include 'footer.php' ?>
</body>
</html>