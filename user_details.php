<?php
include("dbconnect.php");
error_reporting(0);
if($_REQUEST['id'])
{
	$id=$_REQUEST['id'];
	$sql="update user set status='Activated' where id='$id'";
	$execute=mysql_query($sql);
	if($execute)
	{
		$msg="User Activated";
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
<h2>User details</h2>
<p style="color:#0C3;"><?php echo $msg;?></p>
<table>
<tr><th>Name</th><th>Email</th><th>Mobile</th><th>Username</th><th>Action</th><th>Status</th></tr>
<?php 
$sql="select * from user";
$execute=mysql_query($sql);
while($fetch=mysql_fetch_array($execute))
{?>
<tr>
<td><?php echo $fetch['name'];?></td>
<td><?php echo $fetch['email'];?></td>
<td><?php echo $fetch['mobile'];?></td>
<td><?php echo $fetch['username'];?></td>
<td><a href="user_details.php?id=<?php echo $fetch['id'];?>">Activate</a></td>
<td><?php echo $fetch['status'];?></td>


</tr>
	
<?php }






?>



</table>
</div>
</div>
<div class="footer"><p>&copy;Copyright 2024.</p></div>
</body>
</html>