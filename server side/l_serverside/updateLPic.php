<?php session_start();
include_once '../database.php';

$lecid = $_GET["id"];
				  
				 





function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$image_ori = $dir_name . basename($_FILES["fileImage"]["name"]);
$imageFileType = strtolower(pathinfo($image_ori,PATHINFO_EXTENSION));


$dir_name = "../profilepic/";
$new_file_name = generateRandomString() . "." . $imageFileType;
$image = $dir_name . $new_file_name;


move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);


				  
				  
//sql quary
					$sql= "UPDATE `lecture` SET  `path`= '".$new_file_name."' 
					WHERE `lec_id` = '".$lecid."' ";
				  
				  if(mysqli_query($con,$sql))
					{
						echo "file updated Sucessfully";
					  	header('location:../../client side/lec_client/lectureProfile.php');
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
					

?>