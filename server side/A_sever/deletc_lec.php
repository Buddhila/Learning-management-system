<?php 
 include_once '../database.php';

$u_id= $_GET["l_id"];
				  	
//sql quary
		$sql= " DELETE FROM `lecture` WHERE `lec_id`='".$u_id."' ";
				
		if(mysqli_query($con,$sql))
			{
				echo "file deleted";
				header("location:../../client side/A_client/admin.php");	  
			}
				else
				{
					echo "please select the file again !!!!";
				}		

?>