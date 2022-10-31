<?php include_once('./client side/includes/Uheader.php') ?>

<?php session_start();
if(!isset($_SESSION["txtuid"]))
{
	header("location:./client side/login.html");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<link rel="stylesheet" type="text/css" href="./client side/css/body.css" />
	
	<link rel="stylesheet" type="text/css" href="./client side/css/mycourse.css" />
	<link rel="stylesheet" type="text/css" href="./client side/css/newfooter.css" />
	
</head>

<body>

<div  class="bg">
	
<!--<div class="navbar">
		
		<div class="menu">
			<div class="icon">
			<img  class="logo" src="./img/tutora.png"  alt="logo">
			
		</div>
			<ul >
				<li><a href="">Home</a></li>
				<li><a href="./client side/Ucourse.php">Course</a></li>
				<li><a href="./client side/includes/Uheader.php">Blog</a></li>
				<li><a href="./client side/includes/header.php">About</a></li>
				<li><a href="./client side/UserProfile.php">profile</a></li>
				
				
				
			</ul>
		</div>
		
		<div>
			<a href="./server side/logout.php"><button class="btn1">Sign out</button></a>
		</div>
</div>-->
	
	
<!-- body-->
	
	<div class="content">
		<div class="my-course">
		<div class="my-course-title"><h2>-- My Course --</h2></div>
		<div class="my-course-content">
			
			<section class="my-course-section">
		<div class="my-course-container">
		<div class="my-course-about">
			
				<?php
	include "./server side/database.php";
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
						
				<a href='./client side/Ucourse.php'>
				<div class='my-course-card'>
				<div class='my-course-card-content'>
					<div class='my-course-card-img'>
						<img src='./img/olt.png' alt='dsiplay-picture'>
					</div>
					<div class='details'>
						<span class='name-my'>".$row5["Course_Name"]."</span>
						
					</div>
				</div></div></a>
				";
				}}
						}}
				?>	
				 

			<a href="./img/olt.png"></a>
		</div>
	</div>
	
	</section> 
			
			</div>
			</div>
		
		
	</div>
	
</div>
	
	<div class="oo">
	<p>-- Latest Courses --</p>
	</div>
	
	<!-- online teachers reg -->
	<a href="./client side/Ucourse.php"></a>
	<div class="st">
	<section class="card-section">
	<div class="container">
		<div class="about-c">
			
				<?php
	include "./server side/database.php";
				$sql =" SELECT * FROM `createcourse`  WHERE `publish`='1'  ORDER BY `SCourse_id` DESC LIMIT 4";
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
				
              echo"
						
				<a href='./client side/Ucourse.php'>
				<div class='card card1' >
				<div class='card-content'>
					<div class='card-img'>
						<img src='./img/5437683.jpg' alt='dsiplay-picture'>
					</div>
					<div class='details'>
						<span class='name'>".$row["Course_Name"]."</span>
						
					</div></a>
				</div></div>
				";
				}}
				?>	
				 

			
		</div>
	</div>
	</section> 
	</div>

	<div class="oo1">
	<lable>-- Our web developing Lecturer Team --</lable>
	</div>
	<section class="card-section">
	<div class="container">
		<div class="about-c">
			
				<?php
	include "./server side/database.php";
				$sql =" SELECT * FROM `lecture` ORDER BY `lec_id` DESC LIMIT 3";
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
				
              echo"<span class='name'></span>
						
				
				<div class='card'>
				<div class='card-content'>
					<div class='card-img'>
						<img src='./server side/".$row["path"]."' alt='dsiplay-picture'>
					</div>
					<div class='details'>
						<span class='name'>".$row["full_name"]."</span>
						<span class='subject'>Web Devoloper</span>
					</div>
				</div></div>
				";
				}}
				?>	
				 

			
		</div>
	</div>
	</section> 
	
			
	
	
	
	<!-- online teachers reg -->
	<!--
	<div class="oL">
	<table>
		
	<tr><td width="950" align="center"><div class="img" align="right">
		<img src="./img/olt.png" width="450px" height="400px;" alt="">
			</div></td>
	<td width="950"><div class="text" align="left">
	<h3>Become an instructor</h3>
	<p class="olp">Instructors from around the world teach <br> thousand of students on <span>Tutora.</span>  We provide the <br>tools and skills to teach what you love.	</p>
	
			</div>
		<button><a href="./client side/register.html">Start Teaching Today</a></button>
		</td></tr>
		</table>
	</div>-->

<!--<footer class="footer">
  	 <div class="">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online shop</h4>
  	 			<ul>
  	 				<li><a href="#">watch</a></li>
  	 				<li><a href="#">bag</a></li>
  	 				<li><a href="#">shoes</a></li>
  	 				<li><a href="#">dress</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-bottom">
			<p>All Right reserved by &copy;conceptial 2020</p>
			</div>
  	 		</div>
  	 	</div>
  	 
</footer>
	-->
		
	
	<!--<a href="./client side/footernew.php"></a>

	<!-------footer------->	
	
		<!--<h4>About Us</h4>
		<p>We help organizations of all types and sizes prepare for the path ahead — wherever it leads. <br> Our curated collection of business and technical courses help companies, governments, <br>and nonprofits go further by placing learning at the center of their strategies.</p>
		
		<p>Get the App for Issues</p>
	<p>powerd by ©Tutora 2022</p>-->
	
<!----x---footer---x---->
</body>
</html>
