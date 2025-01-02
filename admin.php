<?php
session_start();
if(isset($_POST['submit']))
{
	$username=$_POST['user'];
	$userpass=$_POST['pass'];
	if($username=="admin"&& $userpass=="admin123")
	{
		$_SESSION['USER']=$username;
		header("Location:home.php");
		
	}
	else
	{
		$msg="Invalid credentials";
	}
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hostel Vacation and Mess fees security alert system</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="topheader">
<div class="top1"><h1></h1></div>
<div class="top2">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Contact us</a></li>
<li><a href="user_reg.php">User</a></li>
<li><a href="admin.php">Admin</a></li>
</ul>


</div>

</div>
<div class="banner">
<div class="banner_col1">
<img src="images/welcome.jpg" height="200" width="300" />
</div>
<div class="banner_col2"><h1>Bus Pass  Renewal Alert system</h1></div>


</div>
<div class="welcome">
<div class="inner">
<h2>Admin Login</h2>
<form action="" method="post">
<div><label class="lbl">Username</label><input type="text" name="user" class="txt"  required="required"/></div>
<div><label class="lbl">Password</label><input type="password" name="pass"  class="txt" required="required"/></div>
<div><input type="submit" name="submit" value="Login" class="btn" /></div>
</form>
</div>
</div>
<div class="footer"><p>&copy;Copyright 2024.</p></div>
</body>
</html>