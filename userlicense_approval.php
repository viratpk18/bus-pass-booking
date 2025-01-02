<?php
include("dbconnect.php");
error_reporting(0);
session_start();
$s="select * from scheme where email='".$_SESSION['useremail']."'";
$e=mysql_query($s);
$f=mysql_fetch_array($e);


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
<li><a href="userhome.php">Home</a></li>
<li><a href="license_application.php"> Application</a></li>
<li><a href="userlicense_approval.php">View Status</a></li>

<li><a href="download_license.php">Download License</a></li>
<!--<li><a href="view_renewaldetails.php">View renewal details</a></li>-->
<li><a href="signout.php">Logout</a></li>

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

<h2>License Applications</h2>
<p style="color:#0C3;"><?php echo $msg;?></p>
<table>
<tr><th>License Type</th><th>Fullname</th><th>DOB</th><th>Address</th><th>Iden.Marks</th><th>Id Proof</th><th>Id Proof No.</th><th>Email</th><th>Mobile</th><th>Photo</th><th>Download Key</th><th>Status</th></tr>
<?php 
$sql="select * from license_application where email='".$_SESSION['useremail']."'";
$execute=mysql_query($sql);
while($fetch=mysql_fetch_array($execute))
{?>
<tr>
<td><?php echo $fetch['license_type'];?></td>
<td><?php echo $fetch['fullname'];?></td>
<td><?php echo $fetch['dob'];?></td>
<td><?php echo $fetch['address'];?></td>


<td><?php echo $fetch['identification_mark'];?></td>


<td><?php echo $fetch['id_proof_type'];?></td>
<td><?php echo $fetch['id_proof_number'];?></td>

<td><?php echo $fetch['email'];?></td>


<td><?php echo $fetch['mobile'];?></td>
<td><img src="<?php echo $fetch['photo'];?>" height="100px" width="100px" /></td>
<td><?php echo $fetch['randomkey'];?></td>>
<td><?php echo $fetch['status'];?></td>

</tr>
	
<?php }






?>



</table>

</div>

<div class="footer"><p>&copy;Copyright 2020.</p></div>
</body>
</html>