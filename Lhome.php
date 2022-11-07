<?php include './client side/includes/Lheader.php'; ?>

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
<title>Lecture Home</title>
	
	<link rel="stylesheet" type="text/css" href="./client side/css/body.css" />
	<link rel="stylesheet" type="text/css" href="./client side/css/footer.css" />
	
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
				<li><a href="./client side/lec_client/Lcourse.php">Course</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="./client side/lec_client/lectureProfile.php">profile</a></li>
				<li><a href="./client side/lec_client/L_login.html">About</a></li>
				<li><a href="./server side/logout.php"><button class="btn1">Sign out</button></a></li>
				
			</ul>
		</div>
		
		
		

 <!--<a href="./client side/lec_client/lectureProfile.php"><button class="btn"><?php/* echo $_SESSION["txtLid"] */?></button></a>-->
  			
			
  			
			
			
		
<!--</div>-->
	
	
<!-- body-->
	
	<div class="content">
		
	</div>
	
</div>
	
	<div class="oo">
	<p>Choose courses taught by real-world experts  :  Learn at your own pace, with lifetime access on mobile and desktop</p>
	</div>
	
	<!-- online teachers reg -->
	
	<div class="st">
	<table class="st">
		
	<tr><td width="950" ></td><td width="950" align="center"><div class="imglearn" align="center">
		<img src="./img/2895125.png" width="200px" height="200px;" alt="">
			</div>
	<div class="learn" align="center">
	<h3>Learn on your time</h3>
	</div>
		
		</td></tr>
		</table>
	</div>

	<div class="oo1">
	
	</div>
	<section>
	<div class="container">
		<div class="about">
			<div class="card">
				<div class="card-content">
					<div class="card-img">
						<img src="./img/5437683.jpg" alt="dsiplay-picture">
					</div>
					<div class="details">
						<span class="name">Someone name</span>
						<span class="subject">Web Devoloper</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	
	
	
	
	<!-- online teachers reg -->
	
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
	</div>

<footer class="footer">
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
	
		
	
	

	
</body>
</html>
