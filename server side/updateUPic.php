<?php session_start();
include_once './database.php';


$userid = $_GET["id"];
				  
				  $image ="profilepic/".basename($_FILES["fileImage"]["name"]);
				  move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
				  
				  
				  	
//sql quary
					$sql= "UPDATE `user_d` SET  `path`= '".$image."' 
					WHERE `user_id` = '".$userid."' ";
				  
				  if(mysqli_query($con,$sql))
					{
						echo "file updated Sucessfully";
					  	header('location:../client side/UserProfile.php');
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
					

?>