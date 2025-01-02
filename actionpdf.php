<?php
require('WriteHTML.php');
include("dbConfig.php");
error_reporting(0);
if(isset($_POST['submit']))
{
	$key=$_POST['key'];
	$sql="select * from license_application where randomkey='$key'";
	
	$query=$db->query($sql);
	$row = $query->fetch_assoc();	
	$row['license_number'];
	$row['fullname'];
	$row['relation_name'];
	$row['address'];
	$row['dob'];
	$row['expiry'];
	$row['blood_group'];
	$row['photo'];
	
}

$pdf=new PDF_HTML();

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();
$pdf->Image($row['photo'],20,5,35);
$pdf->SetFont('Arial','B',14);
$pdf->WriteHTML('<para><h1>Bus Pass  Renewal Alert system</h1><br>
</para>');

$pdf->SetFont('Arial','B',10); 
$htmlTable='<TABLE>
<TR>
<TD>Bus Pass No</TD>
<TD>'.$row['license_number'].'</TD>
</TR>
<TR>
<TD>Name</TD>
<TD>'.$row['fullname'].'</TD>
</TR>
<TR>
<TD>Address</TD>
<TD>'.$row['address'].'</TD>
</TR>
<TR>
<TD>DOB</TD>
<TD>'.$row['dob'].'</TD>
</TR>
<TR>
<TD>Valid upto</TD>
<TD>'.$row['expiry'].'</TD>
</TR>

<TR>
<TD>Blood Group</TD>
<TD>'.$row['blood_group'].'</TD>
</TR>



</TABLE>';
$pdf->WriteHTML2("<br><br><br>$htmlTable");
$pdf->SetFont('Arial','B',6);
$pdf->Output(); 
?>