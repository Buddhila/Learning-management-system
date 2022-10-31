<?php
session_start();
include_once '../database.php';
$id=$_GET["id"];
$cid=$_GET["c_id"];
$fname = $_POST["txtname"];


function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$image_ori = $dir_name . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($image_ori,PATHINFO_EXTENSION));


$dir_name = "../../document/";
$new_file_name = generateRandomString() . "." . $imageFileType;
$image = $dir_name . $new_file_name;


move_uploaded_file($_FILES["file"]["tmp_name"],$image);





$sql="INSERT INTO `files`( `lesson_id`, `Course_id`, `file_name`,`path`, `file_type`) VALUES ('".$id."','".$cid."','".$fname."','".$new_file_name."','".$imageFileType."')";

if(mysqli_query($con,$sql))
					{
						echo "file updated Sucessfully";
					  	header("location:../../client side/lec_client/view_CL.php?id={$cid}");
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}




?>