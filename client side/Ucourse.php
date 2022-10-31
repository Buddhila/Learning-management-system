<?php include_once('./includes/Uheader.php') ?>

<?php session_start();
if(!isset($_SESSION["txtuid"]))
{
	header("location:login.html");
}


/*if ($_SESSION["role"] == 0) {
	include_once './includes/Uheader.php';
} elseif ($_SESSION["role"] == 1) {
	include_once './includes/Uheader.php';
} elseif ($_SESSION["role"] == 2) {
	include_once './includes/Uheader.php';
} else {
	include_once './includes/Uheader.php';
}*/

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

	<!--<link rel="stylesheet" type="text/css" href="./css/Ucourse.css" />-->
	<link rel="stylesheet" type="text/css" href="./css/Lcourse.css" />
	
	<script type="text/javascript" src="./js/popup.js"	></script>
</head>

<body>
	
	
	
	
	<div class="c-nav">
		<ul class="cul">
			<li><button class="addb" onClick="displaymycourse()">My Course</button></li>
		<li><button class="addb" onClick="displayfreecourse()">Free Course</button></li>
		<li><button class="addb" onClick="displayshortcourse()">Short Course</button></li>
		<li><button class="addb" onClick="displaypending()">Degree Course</button></li>	
		<li><img src="../img/icon/bookmark.png" alt="" width="25px" height="25px" onClick="displayBookmark()"></li>	
			
		</ul>
	</div>
	
	<div class="p-class-2" id="p-class-2">
	<div class="view-course">
		<h3>Short Course</h3>
	<?php
		include_once '../server side/database.php';
				
		$sql =" SELECT * FROM `createcourse` WHERE `publish`= '1' and `free` = '0'";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
				
              echo"
	 <div class='C-content-u'>
		 <div class='c-img'>
		  <img src='../img/5437683.jpg' alt='' width='100px' height='100px'>
		 </div>
		 <div class='c-details'>
		 <b><h5 class='c-name-h5-u'>".$row["Course_Name"]."</h5></b>
		 <h5 class='c-name-h5-u-2'>".$row["discription"]."</h5>
		 <div class='course-dS'>
		 <div class='sub1-course-dS'>
		 <h5>Covering Area :</h5>
		 <h5>Benifit       :</h5>
		 <h5>Cost          :</h5>
		 <h5>Time Duratio  :</h5>
		 </div>
		 <div class='sub1-course-dS'>
		 
		 <h5>".$row["covering_area"]."</h5>
		 <h5>".$row["benifit"]."</h5>
		 <h5>$ ".$row["cost"]."</h5>
		 <h5>".$row["time_duration"]."</h5>
		 
		
		 </div>
		 </div>
		 </div>
		 
		 <div class='buy-button'><a href='./Ubuycourse.php?id=".$row["SCourse_id"]."'><button class='addb-1' onClick=''>Purchase Course</button></a></div>
		 <div class='buy-button'><a href='../server side/bookmark.php?id=".$row["SCourse_id"]."'><img src='../img/icon/add bookmark.png' alt='' width='25px' heigth='25px'></a></div>
	</div>";
						}}
		
		?>
		<!-- <h2><img src='../img/icon/seemore.png' alt='' width='25px' height='25px'></h2>-->
		</div>
		</div>

	
	
		<div class="p-class-3" id="p-class-3">
	<div class="view-course">
		<h3>Free Course</h3>
	<?php
		include_once '../server side/database.php';
				
		
				
					$result2=mysqli_query($con," SELECT * FROM `createcourse` WHERE `free`= '1' ");
				
					if(mysqli_num_rows($result2)>0)
					{
						while($row = mysqli_fetch_assoc($result2))
						{
				
              echo"
	 <div class='C-content-u'>
		 <div class='c-img'>
		  <img src='../img/5437683.jpg' alt='' width='100px' height='100px'>
		 </div>
		 <div class='c-details'>
		 <b><h5 class='c-name-h5-u'>".$row["Course_Name"]."</h5></b>
		 <h5 class='c-name-h5-u-2'>".$row["discription"]."</h5>
		 <div class='course-dS'>
		 <div class='sub1-course-dS'>
		 <h5>Covering Area :</h5>
		 <h5>Benifit       :</h5>
		
		 <h5>Time Duratio  :</h5>
		 </div>
		 <div class='sub1-course-dS'>
		 
		 <h5>".$row["covering_area"]."</h5>
		 <h5>".$row["benifit"]."</h5>
		 
		 <h5>".$row["time_duration"]."</h5>
		 
		
		 </div>
		 </div>
		 
		 
		 
		 
		 </div>
		 <div class='buy-button'><a href='./Ubuycourse.php?id=".$row["SCourse_id"]."'><button class='addb-1' onClick=''>Enroll Course</button></a></div>
	</div>";
						}
						
					}else { echo "try again";
							 }
		
		?>
		
		
		
		</div>
		</div>
	
	
	
	
		<div class="p-class-4" id="p-class-4">
	<div class="view-course">
		<h3>My Course</h3>
	<?php
		include_once '../server side/database.php';
				
		$sql =" SELECT * FROM `sc_stu` WHERE `user_id`='".$_SESSION["txtuid"]."'";
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							$sql5 =" SELECT * FROM `createcourse` WHERE `SCourse_id`='".$row["select_course"]."'";
					$result5=mysqli_query($con,$sql5);
				
					if(mysqli_num_rows($result5)>0)
					{
						while($row5 = mysqli_fetch_assoc($result5))
						{
              			
				
					
								echo"
								<a href='../client side/view_CU.php?id=".$row5["SCourse_id"]."'>
	 						<div class='C-content-u'>
							<div class='c-img'>
							<img src='../img/5437683.jpg' alt='' width='100px' height='100px'>
		 						</div>
                           <div class='c-details'>
                           <b><h5 class='c-name-h5-u'>".$row5["Course_Name"]."</h5></b>
                           <h5 class='c-name-h5-u-2'>".$row5["discription"]."</h5>
                           <div class='course-dS'>
                           <div class='sub1-course-dS'>
                           
                           </div>
                           <div class='sub1-course-dS'>

		 
		
		 </div>
		 </div>
		 
		 
		 
		 
		 </div>
		 </div>
		 </a>
		 ";
						}}
						}}
						
					
							 
		
		?>
		
		
		
		</div>
		</div>
	
	
	<div class="p-class-5" id="p-class-5">
	<div class="view-course">
		<h3>--Bookmark--</h3>
	<?php
		include_once '../server side/database.php';
				
		$sql =" SELECT * FROM `bookmark` WHERE `User_id`='".$_SESSION["txtuid"]."'";
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							$sql5 =" SELECT * FROM `createcourse` WHERE `SCourse_id`='".$row["course_id"]."'";
					$result5=mysqli_query($con,$sql5);
				
					if(mysqli_num_rows($result5)>0)
					{
						while($row5 = mysqli_fetch_assoc($result5))
						{
              			
				
					
								echo"
								<a href='../client side/Ubuycourse.php?id=".$row5["SCourse_id"]."'>
	 						<div class='C-content-u'>
							<div class='c-img'>
							<img src='../img/5437683.jpg' alt='' width='100px' height='100px'>
		 						</div>
                           <div class='c-details'>
                           <b><h5 class='c-name-h5-u'>".$row5["Course_Name"]."</h5></b>
                           <h5 class='c-name-h5-u-2'>".$row5["discription"]."</h5>
                           <div class='course-dS'>
                           <div class='sub1-course-dS'>
                           
                           </div>
                           <div class='sub1-course-dS'>

		 
		
		 </div>
		 </div>
		 
		 
		 
		 
		 </div>
		 </div>
		 </a>
		 ";
						}}
						}}
						
					
							 
		
		?>
		
		
		
		</div>
		</div>
	
	
	
	
	
</body>
</html>