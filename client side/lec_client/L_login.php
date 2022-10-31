<?php
	
	include_once('../includes/Lheader.php')
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lecture login</title>
</head>

<body>
	<form action="../../server side/l_serverside/l_login.php" method="POST">
	<table width= "250" height="200">
			
			<tr><td><label> User Id</label></td></tr>
		<tr><td><input type="text" name="txtLid" id="txtLid" ></td></tr>
			<tr><td><label>password</label></td></tr>
			<tr>
			  <td><p>
			    <input type="password" name="Lpwd"  id="Lpwd">
			  </p>
		      </td></tr>
			
			<tr ><td  align="right"><p>
			  <button name="btnsubmit" id="btnsubmit" >Sign in</button>
			</p>
	      <p>&nbsp;</p></td></tr>
				
	  </table>
		</form>
	
</body>
</html>
