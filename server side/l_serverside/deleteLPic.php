<?php session_start();
 include_once '../database.php';

if(!isset($_SESSION["txtLid"]))
{
	header("location:L_login.html");
}
 
$userid =$_SESSION["txtLid"];

				  	
//sql quary
		
		$sql= "UPDATE `lecture` SET `path`= null WHERE `lec_id`='".$userid."'";
				  
		if(mysqli_query($con,$sql))
			{
				echo "file deleted";
					  
			}
				else
				{
					echo "please select the file again !!!!";
				}
					header('location:../../client side/lec_client/lectureProfile.php');

?>