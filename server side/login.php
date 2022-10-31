<?php session_start();?>
<?php
include_once './database.php';

if (isset($_POST["btnsubmit"])) {
	
	$userid = $_POST["txtuid"];
	$password = $_POST["pwd"];
    $valid = false;


   
   $sql= "SELECT * FROM `user_d` WHERE `user_id`='".$userid."' AND`password`='".$password."'";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $valid = true;
    }
	} else {
    $valid = false;
	}

	if ($valid) {
    $_SESSION["txtuid"] = $userid;
		
		// add role as the variable
    $_SESSION["role"] = $userid;
		
    header("Location:../Uhome.php");
	} else {
    echo "Please enter correct usernamr and password";
		 header("Location:../home.html");
	}

?>























