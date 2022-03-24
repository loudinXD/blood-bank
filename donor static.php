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
$Blood=$_POST['bg'];
$query="INSERT INTO `DONOR_STATIC`(`ID`, `NAME`, `SEX`, `DOB`, `ADDRESS`, `BLOODGROUP`, `PHONE`, `EMAIL`) VALUES ('$Id', '$Name', '$Gender', '$DOB', '$Address', '$Blood', '$Mobile', '$Email')";
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=home.php"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>

