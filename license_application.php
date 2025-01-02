<?php
include("dbconnect.php");
error_reporting(0);
session_start();
if(isset($_POST['submit']))
{
	$fromplace=$_POST['fromplace'];
	$toplace=$_POST['toplace'];
	$fullname=$_POST['fullname'];
	$address=$_POST['address'];
	$idprooftype=$_POST['idprooftype'];
	$placeofbirth=$_POST['placeofbirth'];
	$edu_qualify=$_POST['edu_qualify'];
	$blood_group=$_POST['blood_group'];
	$target = "photo/"; 
$target = $target . basename( $_FILES['filetoupload']['name']) ; 
$ok=1; 
if(move_uploaded_file($_FILES['filetoupload']['tmp_name'], $target)) 
{
echo "<script>alert ('The file ". basename( $_FILES['filetoupload']['name']). " has been uploaded')</script>";
} 
else {
echo "Sorry, there was a problem uploading your file.";
}
	$relation=$_POST['relation'];
	$dob=$_POST['dob'];
	$identify_mark=$_POST['identify_mark'];
	$idproof_num=$_POST['idproof_num'];
	
	
	$sql="insert into  license_application(fromplace,toplace,relation_name,fullname,dob,	address,identification_mark,id_proof_type,id_proof_number,placeofbirth,edu_qualification,blood_group,photo,email,mobile,status,randomkey,license_number)values('$fromplace','$toplace','$relation','$fullname','$dob','$address','$identify_mark','$idprooftype','$idproof_num','$placeofbirth','$edu_qualify','$blood_group','$target','".$_SESSION['useremail']."','".$_SESSION['usermobile']."','Waiting','','')";
	//echo $sql;
$execute=mysql_query($sql);
if($execute)
{
	$msg="Your Application Submitted Successfully";
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
<h2 >Bus Pass Application</h2>
<p style="color:#090;"><?php echo $msg;?></p>
<form action="" method="post" class="license_frm" enctype="multipart/form-data">
<div class="frm_col1">
<div><label class="lbl">From Place </label>
<input type="text" name="fromplace"  class="txt"  required="required"/>

</div>
<div><label class="lbl">To Place </label>
<input type="text" name="toplace"  class="txt"  required="required"/>

</div>
<div><label class="lbl">Full Name</label><input type="text" name="fullname"  class="txt" required="required"/></div>
<div><label class="lbl">Address</label><textarea rows="5" cols="26" class="txt_area" name="address" required="required"></textarea></div>
<div><label class="lbl">Id Proof Type</label>
<select class="drp" name="idprooftype" required>
<option value="">--select id proof type-- </option>
<option value="Ration Card">Ration Card</option>
<option value="Aadhar Card">Aadhar Card</option>
<option value="Voter Id">Voter Id</option>


</select></div>
<div><label class="lbl">Place of Stop</label><input type="text" name="placeofbirth"  class="txt"  required="required"/></div>	
<div><div><label class="lbl">Educational Qualification</label><input type="text" name="edu_qualify"  class="txt" required="required"/></div>
</div>
<div><label class="lbl">Blood Group</label><input type="text" name="blood_group"  class="txt" required="required"/></div>
<div><label class="lbl">Photo</label><input type="file" name="filetoupload"  class="txt" required="required"/></div>
</div>
<div class="frm_col1">

<div><label class="lbl">Parent Name</label><input type="text" name="relation"  class="txt" required="required"/></div>
<div><label class="lbl">DOB</label><input type="text" name="dob"  class="txt" required="required"/></div>
<div><label class="lbl">Identification Marks</label><textarea rows="5" cols="26" class="txt_area" name="identify_mark" required="required"></textarea></div>
<div><label class="lbl">Id proof Number</label><input type="text" name="idproof_num"  class="txt" required="required"/></div>

<div><input type="submit" name="submit" value="Submit" class="btn" /></div>

</div>
</form>

</div>
</div>
<div class="footer"><p>&copy;Copyright 2024.</p></div>
</body>
</html>