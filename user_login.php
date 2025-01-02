<?php
include("dbconnect.php");
error_reporting(0);
session_start();
if(isset($_POST['submit']))
{
	
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	
	$sql="select * from user where username='$user' and password='$pass' and status='Activated'";
$execute=mysql_query($sql);
$fetch=mysql_fetch_array($execute);
$_SESSION['username']=$fetch['username'];
$_SESSION['useremail']=$fetch['email'];
$_SESSION['usermobile']=$fetch['mobile'];
if(mysql_affected_rows()>0)
{
	header("Location:userhome.php");
}
else
{
	echo"<script>alert('Invalid entries or Not yet activated')</script>";
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
<h2>User Login</h2>
<p style="color:#090;"><?php echo $msg;?></p>
<form action="" method="post">

<div><label class="lbl">Username</label><input type="text" name="user"  class="txt" required="required"/></div>
<div><label class="lbl">Password</label><input type="password" name="pass"  class="txt" required="required"/></div>
<div><input type="submit" name="submit" value="Submit" class="btn" /></div>
<div><a href="user_reg.php">Click here to Register</a></div>
</form>

</div>
</div>
<div class="footer"><p>&copy;Copyright 2020.</p></div>
</body>
</html>