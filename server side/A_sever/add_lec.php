<?php
include_once '../database.php';

$name=$_POST["txtname"];
$email=$_POST["txtmail"];
$pwd=$_POST["pwd"];
$country=$_POST["country"];

$sql= " INSERT INTO `lecture`( `full_name`, `email`, `password`, `country`) VALUES ('".$name."','".$email."','".$pwd."','".$country."')";
				
		if(mysqli_query($con,$sql))
			{
			
			$sql22 ="SELECT * FROM `lecture` WHERE `full_name`='".$name."' AND `email`='".$email."'";
				
					$result22=mysqli_query($con,$sql22);
					$row22=mysqli_fetch_assoc($result22);
		
							$log22 =$row22["lec_id"];
							$pw22 =$row22["password"];
		
		
			$sqll33="INSERT INTO `login`(`log_id`, `password`, `code`) VALUES ('".$log22."','".$pw22."',1)";			
				
						if(mysqli_query($con,$sqll33))
					{
						echo "file updated Sucessfully";
					  	header('location:../../client side/login.html');
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
			
			
			
			
			
			
				echo "file deleted";
				header("location:../../client side/A_client/admin.php");	  
			}
				else
				{
					echo "please select the file again !!!!";
				}	

?>