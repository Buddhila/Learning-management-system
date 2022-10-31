<?php include_once './Uheader.php'; ?>
<?php ?>
<?php session_start();
//if(!isset($_SESSION["txtuid"]) && $_SESSION["role"] == 0)
if(!isset($_SESSION["txtuid"]))
{
	header("location:login.html");
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="./css/ubuycourse.css" />
	<script type="text/javascript" src="./js/popup.js"	></script>
</head>

<body>
	<div class="p-class-2">
	<div class="view-course-2">
	<div class='C-content-2'>
		<?php
		include_once '../server side/database.php';
				
		$sql =" SELECT * FROM `createcourse` WHERE `SCourse_id`= '".$_GET["id"]."' ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row2 = mysqli_fetch_assoc($result))
						{
				
              echo"
	<div class='title-course'><div class='title-img'><img src='../img/2895125.png' alt='image' width='200px' height='200px' ></div>
				<div class='title-Content'><div class='title-name'><h1>".$row2["Course_Name"]."</h1></div>
				<div><p>".$row2["discription"]."</p></div>
				<div class='course-dS'>
		 <div class='sub1-course-dS'>
		 <h5>Covering Area :</h5>
		 <h5>Benifit       :</h5>
		 <h5>Cost          :</h5>
		 <h5>Time Duratio  :</h5>
		 </div>
		 <div class='sub1-course-dS'>
		 
		 <h5>".$row2["covering_area"]."</h5>
		 <h5>".$row2["benifit"]."</h5>
		 <h5>$ ".$row2["cost"]."</h5>
		 <h5>".$row2["time_duration"]."</h5>
		 
		
		 </div>
		 </div>
		
		 </div>
		 </div>
				
					</div>
					</div>"; }}?>
					
					</div>
					</div>
					</div>
	
	
	<div class="c-nav">
		<ul class="cul">
		<li><button class="addb" onClick="displayflexrev()">Student Review</button></li>
		<li><button class="addb" onClick="displayflexbuy()">Purchrse</button></li>
		</ul>
	</div>
	<div class="add-form-2" id="add-form-rev">
		<div class="manage">
		<div class="close" id="close" ><img src="../img/icon/close.png" alt="" width="25px" height="25px" onClick="displaynonerev()"></div>
					
					
						<?php
						
						include_once '../server side/database.php';
			
			
			
			
			
			
				
		$sql =" SELECT * FROM `review_table` WHERE `SC_id`= '".$_GET["id"]."' ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row2 = mysqli_fetch_assoc($result))
						{
				
              echo"
			  <div class='c-add-form-2'>
			  <div class='center-reviev'>
			  <div class='c-img'>
		  <img src='../img/5437683.jpg' alt='' width='30px' height='30px'>
		 </div>
			  <div class='review-view'><lable>".$row2["review"]."</lable></div></div>	";
							
						
							
							
						$sqll =" SELECT * FROM `user_d` WHERE `user_id`= '".$row2["User_id"]."' ";
				
					$result2=mysqli_query($con,$sqll);
				
					if(mysqli_num_rows($result2)>0)
					{
						while($row = mysqli_fetch_assoc($result2))
						{	
							
						echo"	
			  <div class='user-review'><lable>".$row["full_name"]."</lable>";
						
						}}
			 
			  echo"
					<lable>(".$row2["date"].")</lable></div>
			  </div> ";
			  }}
						
						
						
						
						
						?>
	</div></div>
	
	<div class="add-form-buy" id="add-form-2">
		<div class="manage">
		
					
						<?php
						
						include_once '../server side/database.php';
				
		$sql =" SELECT * FROM `user_d` WHERE `user_id`= '".$_SESSION["txtuid"]."' ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row3 = mysqli_fetch_assoc($result))
						{
				
              echo"
			  <div class='c-add-form-2'>
			  <div class='center-reviev'>
			 	<div>
				<div class='course-dS'>
		 		<div class='sub1-course-dS'>
		 		<h6>User Name :</h6>
		 		<h6>email     :</h6>
		 		<h6>Address         :</h6>
		 		<h6>Course Name        :</h6>
		 		<h6>Cost        :</h6>
		 		<h6>Account Details  :</h6>
		 		</div>
				</div>
				</div>
				
				
				
			 	<div>
				<div class='course-dS'>
		 		<div class='sub1-course-dS'>
		 		<form action='../server side/buy.php?id=".$_GET["id"]."' method='post'>
				<input type='text' name='txtname' id='txtname' value='".$row3["full_name"]."' readonly><br>
				<input type='email' name='txtmail' id='txtmail' value='".$row3["email"]."' readonly><br>
				<input type='text' name='txtaddress' id='txtaddress' placeholder='enter your address' required><br>";
				
				
							
				
					$sql =" SELECT * FROM `createcourse` WHERE `SCourse_id`= '".$_GET["id"]."' ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row4 = mysqli_fetch_assoc($result))
						{
				
              			echo" <input type='text' name='cname' id='cname' value='".$row4["Course_Name"]."' readonly><br>
							<input type='text' name='cname' id='cname' value='$ ".$row4["cost"]."' readonly><br>
						
						";}}
							
							
							echo "
				<input type='text' name='account' id='account' value='".$row3["account_details"]."'required ><br><br>
				<input type='submit' name='btnsubmit' id='btnsubmit' value='Purchase'>
				</form>
		 		</div>
				</div>
				
				</div>
						
							
							
					</div>
					</div>";
					
			  }}
						
						
						
						
						
						?>
	</div></div>
	
	
	
	
	
</body>
</html>