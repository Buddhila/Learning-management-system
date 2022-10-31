<?php
	
	include_once('../includes/Lheader.php')
?>
<?php session_start();
if(!isset($_SESSION["txtLid"]))
{
	header("location:./client side/lec_client/L_login.html");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="../css/Lcourse.css"/>
</head>

<body>
	<div class="update-form-3" id="update-form">
	<div class="manage">
	<!--<div class="close" id="close2" ><img src="../../img/icon/close.png" alt="" width="25px" height="25px" onClick="displaynone_2()"></div>-->	
		<div class="c-add-form-2">
						<h3 class="topic">ADD Lesson Files</h3>
						<form action='../../server side/l_serverside/addfile.php?id=<?php echo $_GET["id"] ?>&c_id=<?php echo $_GET["c_id"]?>' enctype="multipart/form-data" method="post" class="addCF">
							
						<div class="div1">
							<lable>File Name</lable><br>
							<input type="text" name="txtname" id="txtname" placeholder="File Name" required><br>
							<lable>Add file</lable><br>
							<input type="file" name="file" id="file"  required><br>
							
							
							<input type="submit" name="btnSubmit" id="btnSubmit" value="Add File">
							<input type="reset" name="btnreset" id="btnreset" value="Cancle">
						</div>											
						<div class="div2">
							
							<!---->
							<!--<a href='./view_CL.php?id=<?php echo $_GET["id"] ?>&c_id=<?php echo $_GET["c_id"]?>'><input type="button" name="button" value="Back"></a>-->
						</div>
						</form>
					</div>	
		
		
		</div>
		</div>
</body>
</html>