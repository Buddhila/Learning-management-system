
<?php 
include_once '../database.php';

		$id = $_GET["id"];
		if(isset($_POST["publish"]))
					  {$status=1;}
				  else
					  {$status=0;}
	
		$sql= "UPDATE `createcourse` SET  `publish`= '".$status."' 
					WHERE `SCourse_id` = '".$id."' ";
			if(mysqli_query($con,$sql))
					{
						echo "file uploaded Sucessfully";
						header("location:../../client side/A_client/admin.php");
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
				 
			  
	
?>