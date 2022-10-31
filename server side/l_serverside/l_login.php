<?php session_start();?>
<?php
include_once '../database.php';

if (isset($_POST["btnsubmit"])) {
$lectureid = $_POST["txtLid"];
	$password = $_POST["Lpwd"];
    $valid = false;



    
   $sql= "SELECT * FROM `lecture` WHERE `lec_id`='".$lectureid."' AND `password`='".$password."';";

	
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $valid = true;
    }
} else {
    $valid = false;
}
if ($valid) {
    $_SESSION["txtLid"] = $lectureid;
    header("Location:../../Lhome.php");
} else {
    echo "Please enter correct usernamr and password";
}

?>
