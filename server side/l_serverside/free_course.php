<?php
session_start();
include_once '../database.php';

$id=$_GET["id"];
$week = $_POST["week"];

if(isset($_POST["free"]))
					  {$status=1;}
				  else
					  {$status=0;}


$sql = "SELECT * FROM `free_course` WHERE `course_id`='".$id."'";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) 
	{
        echo '<script>alert("its already free")</script>';
		 /*?>header("location:../../client side/lec_client/view_CL.php?id={$id}");<?php */
    
	} else{

if($status == 1){

 $sql="INSERT INTO `free_course`( `course_id`, `free_weeks`) VALUES ('".$id."', '".$week."') ";
 
	 if(mysqli_query($con,$sql))
					{
		 
		 $sql2="UPDATE `createcourse` SET  `free`= '".$status."' 
					WHERE `SCourse_id` = '".$id."' ";
		  			if(mysqli_query($con,$sql2))
					{
						echo '<script>alert("file updated Sucessfully")</script>';
					  	header("location:../../client side/lec_client/view_CL.php?id={$id}");
					}
		 
		 
						
					}
				  	else
				  	{
					  	echo'<script>alert("please select the file again !!!!")</script>';
					}

} else{
	echo "select the free check box and try again ";
}
	}

?>