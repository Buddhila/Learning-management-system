<?php
	
	include_once('./includes/Uheader.php')
?>
<?php include_once '../server side/database.php';?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My course</title>
	<link rel="stylesheet" type="text/css" href="./css/Lcourse.css" />
</head>

<body>
	<div class="p-class-22">
	<div class="view-course-2">
	<div class='C-content-2'>
	
		<?php
		
				
		$sql =" SELECT * FROM `createcourse` WHERE `SCourse_id`= '".$_GET["id"]."' ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row2 = mysqli_fetch_assoc($result))
						{
				
              echo"
			  
			  <div class='title-course'><div class='title-img'><img src='../img/5437683.jpg' alt='image' width='200px' height='200px' ></div>
				<div class='title-Content'><div class='title-name'><h1>".$row2["Course_Name"]."</h1></div>
				<div><p>".$row2["discription"]."</p></div>
				
			 
			</div>
			</div>";
			  
			 }}
				  
		
		
				
		$sql =" SELECT * FROM `lessons` WHERE `SCourse_id`= '".$_GET["id"]."' ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							
							
              echo"
	 
		 
		  <div>
			<div class='hr-CV'><hr></div>
	 		<div class='c-details'>     
		 
		 	<h2 class='c-name-h2'>".$row["lesson_name"]."</h2>";
		 
		
							
				 $sql1 =" SELECT * FROM `files` WHERE `lesson_id`= '".$row["lesson_id"]."' ";
				
					$result1=mysqli_query($con,$sql1);
				
					if(mysqli_num_rows($result1)>0)
					{
						while($row1 = mysqli_fetch_assoc($result1))
						{
				
              echo"
		 
		 
		 <div class='lesson-d'>
		 <div class='d-1'>"; ?>
		<?php
							
							if($row1["file_type"] == 'docx')
							{
							echo "	<img src='../img/icon/filetype/doc.png' alt='pdf' width='25px' height='25px'>";
							} else if($row1["file_type"] == 'pdf') 
							{
								echo "	<img src='../img/icon/filetype/pdf.png' alt='pdf' width='25px' height='25px'>";
							} else if ($row1["file_type"] == 'mp4')
							{
								echo "	<img src='../img/icon/filetype/zip.png' alt='pdf' width='25px' height='25px'>";
							} else
							{
								echo "	<img src='../img/icon/filetype/pdf.png' alt='pdf' width='25px' height='25px'>";
							}
						
							
							 ?>
								
						<?php	echo"	</div>
						<div class='d-2'><p><a href=\"http://localhost/project%20wad/document/".$row1["path"]."\" target=\"_blank\" rel=\"noopener noreferrer\">".$row1["file_name"]."</a></p></div>
						
		 				<div class='del-button' ></div>
						
						</div> ";}}
				 
						}}	?>
		
		
		 </div>
		</div>
		</div>
	</div>
</body>
</html>