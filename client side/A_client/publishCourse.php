<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>publish</title>
	<link rel="stylesheet" type="text/css" href="../css/A_checkC.css" />
</head>

<body>
	<a href="./admin.php"><butto>click</butto></a>
<div class="c-check">
	<div class="view-course">
		
		
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
		 <div>
		 <lable>Discription</lable><br>
		 <lable>Covering Area</lable><br>
		 <lable>Benifit</lable><br>
		 <lable>Cost</lable><br>
		 <lable>Time Duration</lable><br>
		 </div>
		 <div class='c-details'>
		 <h3>".$row["Course_Name"]."</h3>
		 <lable>".$row["discription"]."</lable><br>
		 <lable>".$row["covering_area"]."</lable><br>
		<lable>".$row["benifit"]."</lable><br>
		 <lable>".$row["cost"]."</lable><br>
		 <lable>".$row["time_duration"]."</lable><br>
		 
		 <form action='../../server side/A_sever/published.php?id=".$row["SCourse_id"]."' method='post'>
		
		 <input type='checkbox' name='publish' id='publish' valuve='publish'><lable>publish</lable> <br>
		 <input type='submit' name='txtsubmit' id='txtsubmit' value='publish'>
		 </form>
		 </div>
		 
		</div>"; }}
		
		 ?>
		
		 </div>
		 </div>
	
</body>
</html>