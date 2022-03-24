
 <?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");

$Id=$_POST['Id'];
$Name=$_POST['Name'];
$Address=$_POST['Address'];
$Gender=$_POST['Gdr'];
$Mobile=$_POST['Mobile_no'];
$DOB=$_POST['birth'];
$Email=$_POST['Email'];
// $Password=$_POST['pwd'];
$query = "UPDATE `receiver_static` SET `ID`='$Id',`NAME`='$Name',`SEX`='$Gender',`DOB`='$DOB',`PHONE`='$Mobile',`EMAIL`='$Email',`ADDRESS`='$Address' WHERE `ID`='$Id'";

$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=up receiver.php"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>

