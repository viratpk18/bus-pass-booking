<?php
include("dbconnect.php");
error_reporting(0);
session_start();
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
		$sql="insert into user(name,email,mobile,username,password,status)values('$name','$email','$mobile','$user','$pass','Waiting')";
$execute=mysql_query($sql);
echo $sql;
if($execute)
{
	$msg="Successfully Registered";
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
<h2>User Registration</h2>
<p style="color:#090;"><?php echo $msg;?></p>
<form action="" method="post">
<div><label class="lbl">Name</label><input type="text" name="name" class="txt" required="required" /></div>
<div><label class="lbl">Email</label><input type="text" name="email"  class="txt" required="required"/></div>
<div><label class="lbl">Mobile</label><input type="text" name="mobile"  class="txt" required="required"/></div>
<div><label class="lbl">Username</label><input type="text" name="user"  class="txt" required="required"/></div>
<div><label class="lbl">Password</label><input type="password" name="pass"  class="txt" required="required"/></div>
<div><input type="submit" name="submit" value="Submit" class="btn" /></div>
<div><a href="user_login.php">Click here to login</a></div>
</form>

</div>
</div>
<div class="footer"><p>&copy;Copyright 2020.</p></div>
</body>
</html>