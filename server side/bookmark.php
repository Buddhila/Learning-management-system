<?php
 session_start();
if(!isset($_SESSION["txtuid"]))
{
	header("location:login.html");
}
include_once('./database.php');

$id= $_GET["id"];

$sql1="SELECT * FROM `bookmark` WHERE `course_id`='".$id."' AND `User_id`='".$_SESSION["txtuid"]."'";

    $result = mysqli_query($con, $sql1);
    if (mysqli_num_rows($result) > 0) 
	{
        echo '<script>alert("This one already in the bookmark")</script>';
		
		
       
    
    } 
	else{



$sql="INSERT INTO `bookmark`( `course_id`, `User_id`) VALUES ('".$id."','".$_SESSION["txtuid"]."')";

if(mysqli_query($con,$sql))
					{
						echo "<script>alert('Transaction Succesfully');</script>";
					  	header("location:../client side/Ucourse.php");
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}



	}



?>