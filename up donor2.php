<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");

$Id=$_POST['Id'];
$Name=$_POST['Name'];
$Gender=$_POST['Gdr'];
$DOB=$_POST['birth'];
$Address=$_POST['Address'];

$Blood=$_POST['bloodgroup'];
$Mobile=$_POST['Mobile_no'];

$Email=$_POST['Email'];

$query="UPDATE `donor_static` SET `ID`='$Id',`NAME`='$Name',`SEX`='$Gender',`DOB`='$DOB',`ADDRESS`='$Address',`BLOODGROUP`='$Blood',`PHONE`='$Mobile',`EMAIL`='$Email' WHERE `ID`='$Id';";
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=donor static disp.php"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>
