<?php
include_once './database.php';
$fname =$_GET["id"];
$email =$_GET["id_2"];


$sql =" SELECT * AS id FROM `user_d` WHERE `full_name`='".$fname."' `email`='".$email."'";
				
					$result=mysqli_query($con,$sql);
				
					$row2=mysqli_fetch_assoc($result);
							$log =$row2["id`"];
							$pw =$row2["password"];
echo $log;
			
		$sqll="INSERT INTO `login`(`log_id`, `password`, `code`) VALUES ('".$log."','".$pw."',0)";			
				
						if(mysqli_query($con,$sqll))
					{
						echo "file updated Sucessfully";
					  	header('location:../../client side/login.html');
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
					
						
                 

						
						
			

?>