<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="cssL.css" />
</head>

<body>
<table width="288" height="258" align="center" border="1">
<form action="" method="post">
  <tr><td><table width="288" height="258" align="center">
    <tr>
      <td align="center">Log in</td>
    </tr>
    <tr>
      <td><label>User name</label></td>
    </tr>
    <tr>
      <td><input type="text" name="txtuname" id="txtuname"></td>
    </tr>
    <tr>
      <td><label>Password</label></td>
    </tr>
    <tr>
      <td><p>
        <input type="password" name="txtpassword" id="txtpassword">
      </p>
        <p>
          <?php
				if(isset($_POST["btnsubmit"]))
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
						echo" *user name and password is not valid";
					}
				}
				
					
				?>
        </p></td>
    </tr>
    <tr>
      <td><input type="submit" name="btnsubmit" id="btnsubmit" value="submit">
        <a href="">*forgrt password</a></td>
    </tr>
  </table></td></tr>
</form>
</table>
</body>
</html>
