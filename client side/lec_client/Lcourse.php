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
	<link rel="stylesheet" type="text/css" href="../css/Lcourse.css" />
	
	<script type="text/javascript" src="../js/popup.js"></script>
</head>

<body>
	
	<div class="c-nav">
		<ul class="cul">
		<li><button class="addb" onClick="displayflex()">Add course</button></li>
		<li><button class="addb" onClick="displayflex2()">Update course</button></li>
		</ul>
	</div>
	<div class="p-class">
<!--add course form-->
	<div class="add-form" id="add-form">
		<div class="manage">
		<div class="close" id="close" ><img src="../../img/icon/close.png" alt="" width="25px" height="25px" onClick="displaynone()"></div>
					
					<div class="c-add-form">
						<h3 class="topic">Request For New Course</h3>
						<form action="../../server side/l_serverside/addCourse.php" method="post" class="addCF">
							
						<div class="div1">
							<lable>Course Name</lable><br>
							<input type="text" name="txtname" id="txtname" placeholder="Couse Name" required><br>
							<lable>Discription</lable><br>
							<textarea id="txtdiscription" name="txtdiscription" placeholder="Couse discription" required></textarea><br>
							<lable>Benefit for Student</lable><br>
							<textarea id="txtB-st" name="txtB-st"  placeholder="txtB-st" required></textarea><br>
							<input type="submit" name="btnSubmit" id="btnSubmit" value="Request">
							<input type="reset" name="btnreset" id="btnreset" value="Cancle">
						</div>											
						<div class="div2">
							<lable>Time Duration</lable> <br>
							<input type="text" name="txttime" id="txttime" placeholder="Time Duration" required><br>
							<lable>Covering Area</lable><br>
							<textarea id="txtcoverarea" name="txtcoverarea"   placeholder="Covering Area" required></textarea><br>	
							<lable>Course Cost</lable><br>
							<input type="text" name="txtcost" id="txtcost" placeholder="Couse Cost" required><br>
							
							
						</div>
						</form>
					</div>	
	</div></div>
<!--update course form-->	
	<div class="update-form" id="update-form">
	<div class="close" id="close2" ><img src="../../img/icon/close.png" alt="" width="25px" height="25px" onClick="displaynone_2()"></div>	
		</div>
	</div>
	
	
	<div class="p-class-31">
	<div class="view-course">
		
		<?php
		include_once '../../server side/database.php';
				
		$sql =" SELECT * FROM `createcourse` WHERE `publish`= '1'  AND `L-id`='".$_SESSION["txtLid"]."' ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
				
              echo"
	 <div class='C-content'>
		 <div class='c-img'>
		  <img src='../../img/5437683.jpg' alt='' width='100px' height='100px'>
		 </div>
		 <div class='c-details'>
		 <h5 class='c-name-h5'>".$row["Course_Name"]."</h5>
		 <h6>".$row["discription"]."</h6>
		 <h2><a href='./view_CL.php?id=".$row["SCourse_id"]."'><img src='../../img/icon/seemore.png' alt='' width='25px' height='25px'></a></h2>
		 </div>
		</div>";
						}}
		
		?>
		
		
	</div>
	</div>
		
</body>
</html>
