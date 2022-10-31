<?php session_start();
include_once '../database.php';

 $courseid = $_GET["id"];
$lesson_name = $_POST["txtname"];

$sql= "INSERT INTO `lessons` ( `SCourse_id`,`lesson_name`) VALUES ('".$courseid."','".$lesson_name."') ";

					if(mysqli_query($con,$sql))
					{
						$row = $courseid;
						echo "file updated Sucessfully";
					  	header("location:../../client side/lec_client/view_CL.php?id={$row}");
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					
					}


?>