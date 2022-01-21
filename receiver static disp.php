<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
$query="SELECT * FROM `RECEIVER_STATIC`  ";
$res=mysqli_query($mysql_id,$query);
if($res->num_rows>0)
{
?>
<html>
	<title><head>Fetch from database</head></title>
<body>
	<table align ="center" border="1px" style ="width:600px; line-height:30px;">
		<tr>
			<th colspan = "8"><h2>INVENTORY</h2></th>
		</tr>
		<tr>
			<th>RECEIVER ID</th>
			<th>RECEIVER NAME</th>
            <th>GENDER</th>
            <th>BIRTH DATE</th>
            <th>ADDRESS</th>
            <th>MOBILE NUMBER</th>
            <th>EMAIL</th>
		</tr>
	<?php
		while($rows=mysqli_fetch_assoc($res))
		{
	?>
			<tr>
				<td><?php echo $rows['ID']; ?></td>
				<td><?php echo $rows['NAME']; ?></td>
                <td><?php echo $rows['SEX']; ?></td>
                <td><?php echo $rows['DOB']; ?></td>
                <td><?php echo $rows['ADDRESS']; ?></td>
                <td><?php echo $rows['PHONE']; ?></td>
				<td><?php echo $rows['EMAIL']; ?></td>
				
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







