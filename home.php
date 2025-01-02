<?php
session_start();

if(isset($_POST['submit']))
{
	$username=$_POST['user'];
	$userpass=$_POST['pass'];
	if($username=="admin"&& $userpass="admin123")
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
<title>Bus Pass  Renewal Alert system</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="topheader">
<div class="top1"><h1></h1></div>
<div class="top2">
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="user_details.php">User details</a></li>
<li><a href="license_approval.php">License approval</a></li>

<li><a href="renewal_details.php">Renewal Details</a></li>

<li><a href="logout.php">Logout</a></li>
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
<h2>Admin Role</h2>
<ul>
<li>View license application</li>
<li>Approval License</li>
<li>View renewal details</li>
<li>Send sms about renewal</li>
</ul>
</div>
</div>
<div class="footer"><p>&copy;Copyright 2020.</p></div>
</body>
</html>