<?php
include_once '../database.php';
$id = $_GET["id"];


 /*?>$sql ="SELECT * FROM `createcourse` WHERE `SCourse_id`='".$id."'";
$result=mysqli_query($con,$sql);
				
					if(mysqli_num_rows($result)>1)
					{
						$row = mysqli_fetch_assoc($result);
						
							$cid = $row["SCourse_id"];
							$cname=$row["Course_Name"];
							$discription=$row["discription"];
							$covering =$row["covering_area"];
							$benifit=$row["benifit"];
							$cost=$row["cost"];
							$time=$row["time_duration"];
							$lid=$row["L-id"];
							
							$sqll ="INSERT INTO `shortcourse`(`SCourse_id`, `Course_Name`, `discription`, `covering_area`, `benifit`, `cost`, `time_duration`, `L_id`, `free`) VALUES ('".$cid."','".$cname."','".$discription."','".$covering."','".$benifit."','".$cost."','".$time."','".$lid."')";
						}<?php */

$sql_query  =  "INSERT INTO  `shortcourse` select * from `createcourse` WHERE `SCourse_id`='".$id."'"; 
?>