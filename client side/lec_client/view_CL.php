<?php
	
	include_once('../includes/Lheader.php')
?>
<?php session_start();
if(!isset($_SESSION["txtLid"]))
{
	header("location:./client side/lec_client/L_login.html");
}
?>
<?php include_once '../../server side/database.php';?>
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
		<li><button class="addb" onClick="displayflex()">Add Lessons</button></li>
		
		</ul>
	</div>
	<div class="p-class">
<!--add Lessons form-->
	<div class="add-form-2" id="add-form">
		<div class="manage">
		<div class="close" id="close" ><img src="../../img/icon/close.png" alt="" width="25px" height="25px" onClick="displaynone()"></div>
					
					<div class="c-add-form-2">
						<h3 class="topic">ADD Lesson</h3>
						<form action='../../server side/l_serverside/addlesson.php?id=<?php echo $_GET["id"];?>' method="post" class="addCF">
							
						<div class="div1">
							<lable>Lesson Name</lable><br>
							<input type="text" name="txtname" id="txtname" placeholder="Lesson Name" required><br>
							
							<input type="submit" name="btnSubmit" id="btnSubmit" value="Add Lesson">
							<input type="reset" name="btnreset" id="btnreset" value="Cancle">
						</div>											
						<div class="div2">
							
							
							
						</div>
						</form>
					</div>	
	</div></div>
	<!--<div class="update-form-2" id="update-form">
	<div class="manage">
	<div class="close" id="close2" ><img src="../../img/icon/close.png" alt="" width="25px" height="25px" onClick="displaynone_2()"></div>	
		<div class="c-add-form-2">
						<h3 class="topic">ADD Lesson Files</h3>
						<form action='../../server side/l_serverside/addlesson.php?sid=' method="post" class="addCF">
							
						<div class="div1">
							<lable>File Name</lable><br>
							<input type="text" name="txtname" id="txtname" placeholder="File Name" required><br>
							<lable>File Type</lable><br>
							<select required="true" >
							<option disabled selected value="">-- Select One --</option>
								
							<option value="pdf">pdf</option>
							<option value="doc">doc</option>	
							</select  ><br>
							<input type="submit" name="btnSubmit" id="btnSubmit" value="Add File">
							<input type="reset" name="btnreset" id="btnreset" value="Cancle">
						</div>											
						<div class="div2">
							
							
							
						</div>
						</form>
					</div>	
		<div class='free'>
					<form action='../../server side/l_serverside/addlesson.php?id=".$_GET["id"]."' method='post' class='free-f'>
					<div><input type='checkbox' name='free' id='free' value='free'>&nbsp;&nbsp;<lable>Give Free</lable></div> <br>
					<div><input type='number' name='week'  id='week' min= 1>&nbsp;&nbsp;<lable>Duration (weeks)</lable></div><br>
					<div><input type='submit' name='btnSubmit' id='btnSubmit' value='Give Free' ></div>
					</form>
					</div>
		
		</div>
		</div>-->
	
	</div>
	<div class="p-class-500">
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
			  
			  <div class='title-course'><div class='title-img'><img src='../../img/5437683.jpg' alt='image' width='200px' height='200px' ></div>
				<div class='title-Content'><div class='title-name'><h1>".$row2["Course_Name"]."</h1></div>
				<div><p>".$row2["discription"]."</p></div>
				
			 ";
		
				$sql =" SELECT * FROM `free_course` WHERE `course_id`= '".$_GET["id"]."' ";
				
					$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>0)
					{
						while($row2 = mysqli_fetch_assoc($result))
						{
							echo "
							<div class='free'>
							<div><input type='checkbox' name='free' id='free' value='free' checked disabled='disabled'>&nbsp;&nbsp;<lable>Free Course</lable>
							</div>
							</div>
							";}}
							echo"
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
							echo "	<img src='../../img/icon/filetype/doc.png' alt='pdf' width='25px' height='25px'>";
							} else if($row1["file_type"] == 'pdf') 
							{
								echo "	<img src='../../img/icon/filetype/pdf.png' alt='pdf' width='25px' height='25px'>";
							} else if ($row1["file_type"] == 'mp4')
							{
								echo "	<img src='../../img/icon/filetype/zip.png' alt='pdf' width='25px' height='25px'>";
							} else
							{
								echo "	<img src='../../img/icon/filetype/pdf.png' alt='pdf' width='25px' height='25px'>";
							}
							
							
							
							 ?>
								
						<?php	echo"	</div><div class='d-2'><p><a href=\"http://localhost/project%20wad/document/".$row1["path"]."\" target=\"_blank\" rel=\"noopener noreferrer\">".$row1["file_name"]."</a></p></div>
		 <div class='del-button' ><a href='../../server side/l_serverside/delete file.php?f_id=".$row1["file_id"]."&c_id=".$_GET["id"]."'><img src='../../img/icon/delete.png' alt='delete button' width='20px' height='20px' ></a></div></div>
		  
		 ";}}
						
			echo "
		 <div class='upload-img'><img src='../../img/icon/add file.png' alt='add file'  width='25px' height='25px' onClick='displayflex2(". $row["lesson_id"] .")'  ></a></div>
		 </div>
			</div>"; ?>
						<!--//<a href='./temp_addfile.php?id=".$row["lesson_id"]."&c_id=".$_GET["id"]."'>-->
					 <?php
// `````````````````````````````````````````````````````````````````````````````````````````````````````````````````````` add lesson form
							echo
					"<div class='update-form-2 upload-form-1' id='update-form-".$row["lesson_id"]."'>
	<div class='manage'>
	<div class='close' id='close2' ><img src='../../img/icon/close.png' alt='' width='25px' height='25px' onClick='displaynone_2(".$row["lesson_id"].")'></div>	
		<div class='c-add-form-2'>
						<h3 class='topic'>ADD Lesson Files</h3>
						<form action='../../server side/l_serverside/addfile.php?id=".$row["lesson_id"]."&c_id=".$_GET["id"]." ' enctype='multipart/form-data' method='post' class='addCF'>
							
						<div class='div1'>
							<lable>File Name</lable><br>
							<input type='text' name='txtname' id='txtname' placeholder='File Name' required><br>
							<lable>Add file</lable><br>
							<input type='file' name='file' id='file'  required><br>
							<input type='submit' name='btnSubmit' id='btnSubmit' value='Add File' onClick='displaynone_2(".$row["lesson_id"].")>
							<input type='reset' name='btnreset' id='btnreset' value='Cancle'>
						</div>											
						
						</form>
					</div>	
		
		
		</div>
		</div>	";		
							
							
						?>
			  
			
		<?php		
							
						}}	
			
						?>
		
		 <div class='hr-CV'><hr></div>
					<div class='free'>
					<form action='../../server side/l_serverside/free_course.php?id=<?php echo $_GET["id"]; ?>' method='post' class='free-f'>
					<div><input type='checkbox' name='free' id='free' value='free' readonly>&nbsp;&nbsp;<lable>Give Free</lable></div> <br>
					<div><input type='number' name='week'  id='week' min= 1>&nbsp;&nbsp;<lable>Duration (weeks)</lable></div><br>
					<div><input type='submit' name='btnSubmit' id='btnSubmit' value='Give Free' ></div>
					</form>
					</div>
		  
		
		 </div>
		</div>
		
	</div>
	</div>
</body>
</html>