<?php
$username =$_POST["txtuname"];
$password =$_POST["txtpassword"];




 $con= mysqli_connect('localhost','root','','userdetails');

if($con->connect_error){
	die('connection Faild :'.$con->connect_error);
	
}else{
	$stmt=$con->perpare("")
}

?>
























