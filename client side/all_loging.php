<?php session_start();

include_once '../server side/database.php';

if (isset($_POST["btnsubmit"])) {
	
	$userid = $_POST["userid"];
	$password = $_POST["pwd"];
    $valid = false;


   $sql= "SELECT * FROM login WHERE log_id='".$userid."' AND password='".$password."' ";
   

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) 
	{
        $valid = true;
		 while($row = mysqli_fetch_assoc($result))
         {
         
			 
          if($row['code']=='0')
          {
			  
           $sql1= "SELECT * FROM `user_d` WHERE `user_id` ='".$row["log_id"]."' ";
			 	$result1 = mysqli_query($con, $sql1);
    			if (mysqli_num_rows($result1) > 0) 
				{ 
					echo "hakuna matata";
					while($row1 = mysqli_fetch_assoc($result1))
						{
						
			  		$_SESSION["txtuid"] = $row1['user_id'];
           			header("Location:../Uhome.php");
					}
				}
          }
          else if ($row['code']=='1')
		  {
			  $sql2= "SELECT * FROM `lecture` WHERE `lec_id`='".$row["log_id"]."' ";
			  
			  $result2 = mysqli_query($con, $sql2);
    			if (mysqli_num_rows($result2) > 0) 
				{ 
					while($row2 = mysqli_fetch_assoc($result2))
						{
						
			  		$_SESSION["txtLid"] =$row2['lec_id'];
           			header("Location:../Lhome.php");
					}
				}
         } else if($row['code']=='2')
		  {
			  $_SESSION["log_id"] =$row['log_id'];
			 header("Location:../client side/A_client/admin.php");
		}
    }
		
		
	}
		else {
    echo "Please enter correct usernamr and password";
		 header("Location:../home.html");
		
		
    }
	} 

?>


