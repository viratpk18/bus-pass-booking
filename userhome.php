<?php
include("dbconnect.php");
session_start();
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
<div class="inner">
<h2>User Role</h2>
<ul>
<li>Apply License</li>
<li>View renewal details</li>
<li>Receive sms about renewal</li>
</ul>
</div>
</div>

</body>
</html>