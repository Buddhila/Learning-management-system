<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect('localhost','root','','userdetails');
?>
</head>

<body>
	<table>
	<form action="connection.php" method="post">
	<tr><td><label>User name</label></td></tr>
	<tr><td><input type="text" name="txtuname" id="txtuname"></td></tr>
	<tr><td><label>Password</label></td></tr>
	<tr><td><p>
	  <input type="password" name="txtpassword" id="txtpassword">
	</p>
      <p>
		<?php
				/*if(isset($_POST["btnsubmit"]))
				{
					$userName = $_POST["txtuname"];
					$password = $_POST["txtpassword"];
					$valid = false;
					$file = fopen("usernames.txt","r") or die ("unable to open file!");
					
					while(!feof($file))
					{
					 $line = fgets($file);
						$detalis = explode(":",$line);
					
					if((trim($detalis[0])== trim($userName)) && (trim($detalis[1]) ==trim( $password)) )
					{
						$valid = true; break;
					}
					}
					if($valid)
					{
						header("location:Home.html");
					}
					else 
					{
						echo"user name and password is not valid";
					}
				}
				
					
				*/?>
		  <?php
   include("");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['txtuname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['txtpassword']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
     
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: Home.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
		</p></td></tr>
	<tr><td><input type="submit" name="btnsubmit" id="btnsubmit" value="submit"></td></tr>
	
	</form>
	</table>
</body>
</html>
