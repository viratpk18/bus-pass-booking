<?php
include("dbconnect.php");
session_start();
error_reporting(0);
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
<li><a href="license_application.php">License Application</a></li>
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
<div class="inner">
<h2 >License Application</h2>

<?php 


$sql="select * from license_application where email='".$_SESSION['useremail']."'";
$execute=mysql_query($sql);
$fetch=mysql_fetch_array($execute);
$secretkey=$fetch['randomkey'];
?>
<?php 
if($fetch['randomkey'])
{
?>
<p style="color:#090;">Your Secret Key is <?php echo $secretkey;?> .Use this key download your license.</p>
<?php }else{?>
<p style="color:#903;">No Application Submitted</p>
<?php }?>

<form action="actionpdf.php" method="post" class="license_frm">

<div class="frm_col1">


<div><label class="lbl">Enter Key</label><input type="text" name="key"  class="txt" required="required"/></div>

<div><input type="submit" name="submit" value="Download" class="btn" /></div>

</div>
</form>

</div>
</div>

<div class="footer"><p>&copy;Copyright 2020.</p></div>
</body>
</html>