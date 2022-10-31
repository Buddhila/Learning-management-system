<?php session_start();
 include_once '../database.php';

if(!isset($_SESSION["txtLid"]))
{
	header("location:L_login.html");
}
 
$id= $_GET["f_id"];
$cid =$_GET["c_id"];
				  	
//sql quary
		
		$sql= " DELETE FROM `files` WHERE `file_id`='".$id."' ";
				
		if(mysqli_query($con,$sql))
			{
				echo "file deleted";
				header("location:../../client side/lec_client/view_CL.php?id={$cid}");	  
			}
				else
				{
					echo "please select the file again !!!!";
				}
					

?>