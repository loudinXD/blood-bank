<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
$query="SELECT * FROM `DONOR_STATIC`; ";
$res=mysqli_query($mysql_id,$query);
?>
<?php
$Id=$_POST['delete_don_id'];
$query="DELETE FROM `DONOR_STATIC` WHERE ID = '$Id'";
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=admin.php"/>

<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>