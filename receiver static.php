<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");

//$mysql_id=include('connection.php');
$Id=$_POST['Id'];
$Name=$_POST['Name'];
$Address=$_POST['Address'];
$Gender=$_POST['gdr'];
$Mobile=$_POST['Mobile_no'];
$DOB=$_POST['birth'];
$Email=$_POST['Email'];
// $Password=$_POST['pwd'];
// $designation=$_post['desig'];
// $Blood=$_POST['bg'];
$query="INSERT INTO `RECEIVER_STATIC`(`ID`, `NAME`, `SEX`, `DOB`, `PHONE`, `EMAIL`, `ADDRESS`) VALUES ('$Id','$Name','$Gender','$DOB','$Mobile','$Email','$Address')";
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=employee entry.html"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>

