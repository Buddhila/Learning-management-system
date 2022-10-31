<?php
session_start();
if(!isset($_SESSION["txtuid"]))
{
	header("location:login.html");
}
include_once 'database.php';



$cid=$_GET["id"];
$fname = $_POST["txtname"];
$email=$_POST["txtmail"];
$address=$_POST["txtaddress"];
$account=$_POST["account"];
$uid=$_SESSION["txtuid"];

$sql = "SELECT * FROM `sc_stu` WHERE `user_id`='" . $uid . "' and  `select_course`= '" . $cid . "'";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) 
	{
        echo '<script>alert("you are already buy this course")</script>';
		
       
    
    } 
else{
		





$sql="INSERT INTO `sc_stu`( `user_id`, `full_name`, `email`, `address`, `select_course`, `account_details`, `sell`) VALUES ('".$uid."','".$fname."','".$email."','".$address."','".$cid."','".$account."','1')";

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