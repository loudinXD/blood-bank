<</p><?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
//$mysql_id=include('conn.php')


$query="SELECT * FROM `BLOOD_STORAGE`; ";
$res=mysqli_query($mysql_id,$query);
if($res->num_rows>0)
{
?>
<html>
	<title><head>Fetch from database</head></title>
<body>
	<table align ="center" border="1px" style ="width:600px; line-height:30px;">
		<tr>
			<th colspan = "4"><h2>INVENTORY</h2></th>
		</tr>
		<tr>
			<th>TYPE</th>
			<th>QUANTITY</th>
		</tr>
	<?php
		while($rows=mysqli_fetch_assoc($res))
		{
	?>
			<tr>
				<td><?php echo $rows['BLOOD_TYPE']; ?></td>
				<td><?php echo $rows['BLOOD_QUANTITY']; ?></td>
			</tr>
		<?php
		}
		?>
	</table>
</body>
</html>
<?php
}
else
	echo "Empty set";
?>







