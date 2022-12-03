<?php
include_once './database.php';


	$fname =$_POST["txtfullname"];
	$email = $_POST["txtemail"];
	$country =$_POST["txtcountry"];
	$password = $_POST["pwd"];
	$gender =$_POST["gender"];
	$account = $_POST["txtaccount"];


	$sql = "SELECT * FROM `user_d` WHERE `email`='" . $email . "'";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) 
	{
        echo '<script>alert("E-mail already registered")</script>';
		echo"please use new Email address and Submit again";

    } 
	else
	{
	$stmt =$con->prepare("INSERT INTO user_d( full_name, email, password, country, account_details,gender) values(?,?,?,?,?,?)");
	$stmt->bind_param("ssssis",$fname,$email,$password,$country,$account,$gender);
	
	if ($stmt->execute()) 
	{	
		$sql22 ="SELECT * FROM `user_d` WHERE `full_name`='".$fname."' AND `email`='".$email."'";
				
					$result22=mysqli_query($con,$sql22);
					$row22=mysqli_fetch_assoc($result22);
		
							$log22 =$row22["user_id"];
							$pw22 =$row22["password"];
		
		
		$sqll33="INSERT INTO `login`(`log_id`, `password`, `code`) VALUES ('".$log22."','".$pw22."',0)";			
				
						if(mysqli_query($con,$sqll33))
					{
						echo "file updated Sucessfully";
					  	header('location:../client side/login.html');
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
					
		
						
		
    echo  "register done";
    //header("Location:send_to_login.php?id={$fname}&id_2={$email}");
	$stmt->close();
	$con->close();	
	} 
		else 
		{
    echo "Please enter correct usernamr and password";
		}
	}

?>



