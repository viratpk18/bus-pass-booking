<?php
include("dbconnect.php");
error_reporting(0);
if($_REQUEST['id'])
{
$id=$_REQUEST['id'];
$s="select * from scheme where id='$id'";
$e=mysql_query($s);
$f=mysql_fetch_array($e);


	


}

if(isset($_POST['submit']))
{
	$id=$_REQUEST['id'];
$date = date("d-m-Y");
//echo $date;
$duration=$f['duration'];
//echo $duration;
 $date = strtotime(date("d-m-Y", strtotime($date))."+".$duration);
$date = date("d-m-Y",$date);

function gen_random_string($length=5)
{
    $chars ="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";//length:12
    $final_rand='';
    for($i=0;$i<$length; $i++)
    {
        $final_rand .= $chars[rand(0,strlen($chars)-1)];
 
    }
    return $final_rand;
}
$random=gen_random_string();	
	
	$licenseno=$_POST['license_number'];
	$sql="update license_application set status='Approved',expiry='$date',randomkey='$random',license_number='$licenseno' where id='$id'";
	//echo $sql;
	$execute=mysql_query($sql);
	if($execute)
	{
		$msg="Application Approved";
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
<h2 >License Approval</h2>
<p style="color:#090;"><?php echo $msg;?></p>
<form action="" method="post" class="license_frm" enctype="multipart/form-data">
<div class="frm_col1">
<div><label class="lbl">Status</label>
<select class="drp" name="licensetype">
<option value="">--select status-- </option>
<option value="Approved">Approved</option>
<option value="Cancelled">Cancelled</option>


</select></div>
<div><label class="lbl">D.L.No</label><input type="text" name="license_number"  class="txt"/></div>
<div><input type="hidden" name="key"  class="txt" value="<?php echo $date;?>"/></div>


<div><input type="submit" name="submit" value="Submit" class="btn" /></div>

</div>
</form>

</div>
</div>

<div class="footer"><p>&copy;Copyright 2020.</p></div>
</body>
</html>