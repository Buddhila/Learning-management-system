<?php session_start();
 include_once './database.php';

if(!isset($_SESSION["txtuid"]))
{
	header("location:login.html");
}
$userid =$_SESSION["txtuid"];

 
				  	
//sql quary
		
		$sql= "UPDATE `user_d` SET `path`= null WHERE `user_id`='".$userid."'";
				  
		if(mysqli_query($con,$sql))
			{
				echo "file deleted";
					  
			}
				else
				{
					echo "please select the file again !!!!";
				}
					header('location:../client side/UserProfile.php');

?>