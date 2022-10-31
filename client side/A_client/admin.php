<?php session_start();
//if(!isset($_SESSION["txtuid"]) && $_SESSION["role"] == 0)
if(!isset($_SESSION["log_id"]))
{
	header("location:login.html");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="../css/A_checkC.css" />
	<script type="text/javascript" src="../js/popup.js"></script>
</head>

<body class="admin">
	<div class="a-nav">
		<ul class="A-cul">
		<li><button class="Addb" onClick="displayUM()">User </button></li>
		<li><button class="Addb" onClick="displayLM()">Lecture </button></li>
		<li><button class="Addb" onClick="displayCM()">Course </button></li>
		<li><button class="Addb" onClick="displayPM()">Purchase </button></li>
		<li><a href="../../server side/A_sever/logoutA.php"></a><button class="Addb1" onClick="">Sign Out </button></a></li>
		</ul>
	</div>
	
	<div class="u-check" id="user-M">
	<div class="view-user">
		
	  <div class="u-content">
			<div class="H2">
				<h2>User Management</h2>
			</div>
			<div class="u-table">
				<div class="u-table-coloum">
					<table width="806">
			<tr><th width="100">User Id</th><th width="180">Full Name</th><th width="235">Email</th><th width="100">Country</th><th width="100">Gender</th></tr>
				</div>
			<?php
		include_once '../../server side/database.php';
				
		$sql =" SELECT * FROM `user_d` ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
				
              echo" <div class='u-table-row'>
			  <tr><td>".$row["user_id"]."</td><td>".$row["full_name"]."</td><td>".$row["email"]."</td><td>".$row["country"]."</td><td>".$row["gender"]."</td><td><a href='../../server side/A_sever/delete_user.php?u_id=".$row["user_id"]."'><img src='../../img/icon/delete.png' alt='delete' width='20px' heigh='25px'></a></td></tr>
			  </div>
			  ";}} ?>
			
			</table>
			
		
	
		</div>
		</div>
		</div>
		

		<div class="u-content">
			
			<div class="H2">
				<h2> Short Course Registerd Students</h2>
			</div>
			<div class="u-table">
				<div class="u-table-coloum">
					<table width="973">
			<tr><th width="95">STU Id</th><th width="108">User Id</th><th width="155">Full Name</th><th width="223">Email</th><th width="189">Address</th><th width="82">Course ID</th><th width="89">Sell</th></tr>
			
			</div>
			<?php
		include_once '../../server side/database.php';
				
		$sql =" SELECT * FROM `sc_stu` ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row2 = mysqli_fetch_assoc($result))
						{
				
              echo" <div class='stu-table-row'>
			  <tr><td>".$row2["stu_id"]."</td><td>".$row2["user_id"]."</td><td>".$row2["full_name"]."</td><td>".$row2["email"]."</td><td>".$row2["address"]."</td><td>".$row2["select_course"]."</td><td>".$row2["sell"]."</td></tr>
			  </div>
			  ";}} ?>
			
			</table>
		</div>
		</div>
		</div>
		
		</div>
		 </div>
		
	
	<div class="l-check" id="lecture-M">
	<div class="view-lecture">
		
		<div class="l-content">
		
			
			<div class="H2">
				<h2>Lecture Management</h2>
			</div>
			<div class="u-table">
				<div class="u-table-coloum">
					<table width="806">
			<tr><th width="100">lec Id</th><th width="180">Full Name</th><th width="235">Email</th><th width="100">Country</th></tr>
				</div>
			<?php
		include_once '../../server side/database.php';
				
		$sql =" SELECT * FROM `lecture` ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
				
              echo" <div class='u-table-row'>
			  <tr><td>".$row["lec_id"]."</td><td>".$row["full_name"]."</td><td>".$row["email"]."</td><td>".$row["country"]."</td><td><a href='../../server side/A_sever/delete_lec.php?l_id=".$row["lec_id"]."'><img src='../../img/icon/delete.png' alt='delete' width='20px' heigh='25px'></a></td></tr>
			  </div>
			  ";}} ?>
			
			</table>
			<a href=""></a>
		
	
		</div>
		</div>
		</div>
		
		<div class="l-content">
		
			
			<div class="H2">
				<h2>Add Lecture</h2>
			</div>
			<div class="u-table">
				<div class="u-table-coloum">
				<form action="../../server side/A_sever/add_lec.php" method="post" class="add-lec">
					<input type="text" name="txtname" id="txtname" placeholder="lec-name" required>
					<input type="email" name="txtmail" id="txtmail" placeholder="lec-email" required>
					<input type="text" name="pwd" id="pwd" placeholder="lec-def-pwd" required>
					<input type="text" name="country" id="country" placeholder="lec-country" required><br>
					<input type="submit" name="btnSubmit" id="btnSubmit" value="Add" >
					<input type="reset" name="btnreset" id="btnreset" value="Clear" >
					
					
					</form>
			
		
	
		</div>
		</div>
		
		</div>
		
		</div>
		
			</div>
		 </div>

	
	<div class="c-check" id="course-M">
		<div class="view-course">
		<div class="l-content">
		
			
			<div class="H2">
				<h2>Course Management</h2>
			</div>
			<div class="u-table">
				<div class="u-table-coloum">
					<table width="1351">
			<tr><th width="100">course Id</th><th width="150">Course Name</th><th width="250">Discription</th><th width="150">covering Area</th><th width="120">Benifit</th><th width="100">Cost</th><th width="100">Time D</th><th width="50">Publish</th><th width="50">Free</th><th width="200">Lec Name</th></tr>
				</div>
			<?php
		include_once '../../server side/database.php';
				
		$sql =" SELECT * FROM `createcourse` ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
				
              echo" <div class='u-table-row'>
			  <tr><td>".$row["SCourse_id"]."</td><td>".$row["Course_Name"]."</td><td>".$row["discription"]."</td><td>".$row["covering_area"]."</td><td>".$row["benifit"]."</td><td>".$row["cost"]."</td><td>".$row["time_duration"]."</td>";
			  
			  
			  
			  if(($row["publish"])==0)
			  {
				  echo"<td>Pending</td>";
				  
			  } else if (($row["publish"])==1)
			  {
				  echo"<td>publish</td>";
			  }
				 
				if(($row["free"])==0)
			  {
				  echo"<td> </td>";
			  } else if (($row["free"])==1)
			  {
				  echo"<td>Free</td>";
			  }			
							
						$sql =" SELECT * FROM `lecture` WHERE `lec_id`= '".$row["L-id"]."' ";
				
					$result2=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result2)>0)
					{
						while($row2 = mysqli_fetch_assoc($result2))
						{
				
              echo"<td>".$row2["full_name"]."</td></tr>
			  </div>
			  ";}}
						
						}} ?>
			
			</table>
			<a href=""></a>
		
	
		</div>
		</div>
		
		
		</div>
		<div class='C-content-main'>
			<div class="H3">
			<h2>Pending Course</h2>
		</div>
		<?php
		include_once '../../server side/database.php';
				
		$sql =" SELECT * FROM `createcourse` WHERE `publish`= '0' ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
				
              echo
				  "<div class='C-content'>
		 <div class='c-img'>
		  <img src='../../img/5437683.jpg' alt='' width='100px' height='100px'>
		 </div>
		 <div class='c-names'>
		 <lable>Course name</lable><br>
		 <lable>Discription</lable><br>
		 <lable>Covering Area</lable><br>
		 
		 </div>
		 <div class='c-details'>
		 <lable>".$row["Course_Name"]."</lable><br>
		 <lable>".$row["discription"]."</lable><br>
		 <lable>".$row["covering_area"]."</lable>
		 </div><div class='form-pub'>
		 <form action='../../server side/A_sever/published.php?id=".$row["SCourse_id"]."' method='post' >
		
		 <input type='checkbox' name='publish' id='publish' valuve='publish'><lable>  publish</lable> <br>
		 <input type='submit' name='txtsubmit' id='txtsubmit' value='publish'>
		 </form>
		 </div>
		 
		 
		</div>"; }}
		
		 ?>
		
		 </div>
		 </div>
		 </div>
	<!-- popup ``````````````````````````````````````````````-->
	<div class="P-check" id="Purchase-M">
	<div class="view-purchase">
		
		<div class="P-content">
		<div class="H2">
				<h2>Sells log</h2>
		  </div>
			<div class="u-table">
				<div class="p-table-coloum">
					<table width="830">
			<tr><th width="199" align="left">course Name</th><th width="140" align="left">Cost</th><th width="251" align="left">Lecture Name</th><th width="308" align="left">Full sell Amount</th></tr>
				</div>
					<?php
		include_once '../../server side/database.php';
				
		
							
							$sqll =" SELECT * FROM `createcourse` " ;
				
					$result22=mysqli_query($con,$sqll);
				
					if(mysqli_num_rows($result22)>0)
					{
						while($row22 = mysqli_fetch_assoc($result22))
						{
							
						echo"	
							
					<div class='p-table-row'>
			
					<tr><td>".$row22["Course_Name"]."</td><td>".$row22["cost"]."</td> ";
					
							$sqlq =" SELECT * FROM `lecture` WHERE `lec_id`= '".$row22["L-id"]."' ";
				
					$result11=mysqli_query($con,$sqlq);
				
					if(mysqli_num_rows($result11)>0)
					{
						while($row21 = mysqli_fetch_assoc($result11))
						{
							
							echo "
							<td>".$row21["full_name"]."</td>
							
							
							 ";}}
						$sqlw =" SELECT  COUNT(select_course) AS count FROM `sc_stu` WHERE `select_course` = '".$row22["SCourse_id"]."'";
				
						$sum = 0;	
						$result12=mysqli_query($con,$sqlw);
				
					
						
					
                  			$count=mysqli_fetch_assoc($result12);
                  			$tot=$count['count'];
							$sum=$tot*$row22["cost"];
						
						echo 
							 
							"<td>$sum</td>
							
							</tr>
			
					</div>";}}else{ echo"fuck";}
							
							
						

						
						
					?>
					</table>
			
			
		</div>
		</div>
		
		 
		 </div>
		 </div>
	
	
	
	
	
</body>
</html>