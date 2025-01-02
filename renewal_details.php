<?php
error_reporting(0);
include("dbconnect.php");
if($_REQUEST['send_sms'])
{
	//echo"hi";
	$s="select * from license_application where id='$send_sms'";
	//echo $s;
	$e=mysql_query($s);
	$row=mysql_fetch_array($e);
	//$exp=$row['expiry'];
	//echo $exp;
$val = "Dear Customer,Your License is going to expired on.".$row['expiry'].".Please Renew before Thank you.";
  
    $messg = urlencode($val);
 $new_url = "http://sms.f9cs.com/sendsms.jsp?user=f9demo&password=demo1234&mobiles=".$row['mobile']."&senderid=FINECS&sms=".$messg ;
 //echo $new_url;
$cookie="cookie.txt";
$referer = "";      
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $new_url);
curl_setopt($ch, CURLOPT_REFERER,$referer);
curl_setopt($ch, CURLOPT_TIMEOUT, 900);
curl_setopt($ch, CURLOPT_FAILONERROR, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
$content=curl_exec($ch);

$to = $email;
$subject = "Bus Pass  Renewal Alert system";
$body = $message;

$headers .= "Organization:Your Taxi\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
if(mail($to, $subject, $body,$headers))
{
	echo "<script>alert('SMS Delivered Successfully')</script>";
}
$to=$student_mail; //Student email address
$from = "customerservicerems@gmail.com"; // the sender's Email address
   
    $subject = "Bus Pass  Renewal Alert system";
    
    $message =  $val ;
    
	

    $headers2 = "From:" . $from;
  
   if(mail($to,$subject,$message,$headers2))
   {
    echo "<script>alert('Mail Sent.')</script>";
}	
}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bus Pass  Renewal Alert system</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({dateFormat: 'dd-mm-yy'});
  } );
  </script>
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
<h2 >Renewal Details</h2>
<p style="color:#090;"><?php echo $msg;?></p>
<form action="" method="post" class="license_frm" enctype="multipart/form-data">



<div><label class="lbl">Enter Date</label><input type="text" name="expiry"  class="txt" id="datepicker"/></div>
<div><input type="submit" name="submit" value="Search" class="btn" /></div>


</form>

</div>
</div>
<div class="welcome">




<?php

if(isset($_POST['submit']))
{
	
	$expirydate=$_POST['expiry'];

$sql="select * from license_application where expiry='$expirydate'";
//echo $sql;
$execute=mysql_query($sql);
?>
<table>
<tr><th>License Type</th><th>Fullname</th><th>DOB</th><th>Address</th><th>Mobile</th><th>Status</th><th>D.L.No</th><th>Expiry Dates</th><th>Photo</th><th>Action</th></tr>
<?php 
while($fetch=mysql_fetch_array($execute))
{?>
<tr>
<td><?php echo $fetch['license_type'];?></td>
<td><?php echo $fetch['fullname'];?></td>
<td><?php echo $fetch['dob'];?></td>
<td><?php echo $fetch['address'];?></td>






<td><?php echo $fetch['mobile'];?></td>

<td><?php echo $fetch['status'];?></td>
<td><?php echo $fetch['license_number'];?></td>


<td><?php echo $fetch['expiry'];?></td>
<td><img src="<?php echo $fetch['photo'];?>" height="100px" width="100px" /></td>

<td><a href="approval.php?id=<?php echo $fetch['id'];?>">Approval</a></td>
</tr>
	
<?php }




}

?>



</table>

</div>

<div class="footer"><p>&copy;Copyright 2020.</p></div>
</body>
</html>