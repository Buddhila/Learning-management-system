<?php
	
	include_once('./includes/Uheader.php')
?>

<?php session_start();
if(!isset($_SESSION["txtuid"]))
{
	header("location:login.html");
}
?>
<?php
	include_once '../server side/database.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="../client side/css/profile.css" />
	<link rel="stylesheet" type="text/css" href="../client side/css/header.css" />
	
</head>

<body class="p-body">
	<?php
	 
				  	
	$sql ="SELECT * FROM `user_d` WHERE `user_id`= '".$_SESSION["txtuid"]."'";
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		$row =mysqli_fetch_assoc($result);
	
		
	?>
	<div class="profile-table2">
	<div class="main-name"><h1 align="center"><?php echo $row["full_name"]?></h1></div>
	<div class="img-containor">
		<div class="pro-pic"><img src="../server side/<?php echo $row["path"]?>"  width="200" height="200"></div>
		<div class="button-ED">
			<a href='./addUpropic.php?id=<?php echo $row["user_id"];?>'><img src='../img/icon/add-image.png' alt='' width='25' height='25'/></a>
			<a href='../server side/deleteUP.php'><img src='../img/icon/remove.png' alt='' width='25' height='25' /></a>
		</div>
	</div>
	<div class="pro-content">
	<div class="name">
		<div class="lable-pro">
		<h5>Full Name</h5>
		<h5>Email</h5>
		<h5>Country</h5>
		<h5>Account Details</h5>
		<h5>Gender</h5>
		</div>
		<div class="input-pro">
		<input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row["full_name"];?>" readonly> <br>
	
		
		<input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row["email"];?>" readonly> <br>
	
		
		<input type="text" name="txtContry" id="txtContry" value="<?php echo $row["country"];?>" readonly> <br>
			
		<input type="text" name="txtaccdetail" id="txtaccdetail" value="<?php echo $row["account_details"];?>" readonly><br>
			<input type="text" name="txtgender" id="txtgender" value="<?php echo $row["gender"];?>" readonly>
		</div>	
	</div>
	<div class="back-button">
		<a href="../Uhome.php"><input name="btn" type="button" class="button" id="btn" value="Back"/></a>
	</div>
	</div>	
	</div>
	
	<?php
		}
	mysqli_close($con);
		 ?>
</body>
</html>