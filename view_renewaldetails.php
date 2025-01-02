<?php
include("dbconnect.php");
if($_REQUEST['id'])
{

$s="select * from scheme";
$e=mysql_query($s);
$f=mysql_fetch_array($e);


	
$date = date("Y-m-d");
//echo $date;
$duration=$f['duration'];
//echo $duration;
 $date = strtotime(date("Y-m-d", strtotime($date))."+".$duration);
$date = date("Y-m-d",$date);

function gen_random_string($length=12)
{
    $chars ="1234567890abcdefghijklmnopqrstuvwxyz";//length:12
    $final_rand='';
    for($i=0;$i<$length; $i++)
    {
        $final_rand .= $chars[rand(0,strlen($chars)-1)];
 
    }
    return $final_rand;
}
$random=gen_random_string();	
	
	$sql="update license_application set status='Approved',date='$date',randomkey='$random' where id='$id'";
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
<li><a href="userhome.php">Home</a></li>
<li><a href="license_application.php"> Application</a></li>
<li><a href="download_license.php">Download License</a></li>
<li><a href="view_renewaldetails.php">View renewal details</a></li>
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
<tr><th>License Type</th><th>Fullname</th><th>DOB</th><th>Address</th><th>Iden.Marks</th><th>Id Proof</th><th>Id Proof No.</th><th>Email</th><th>Mobile</th><th>Photo</th><th>Action</th><th>Status</th></tr>
<?php 
$sql="select * from license_application";
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
<td><a href="license_approval.php?id=<?php echo $fetch['id'];?>">Approval</a></td>
<td><?php echo $fetch['status'];?></td>

</tr>
	
<?php }






?>



</table>

</div>
<div class="footer"><p>&copy;Copyright 2020.</p></div>
</body>
</html>