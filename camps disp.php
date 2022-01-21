<</p><?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
//$mysql_id=include('conn.php')


$query="SELECT * FROM `CAMPS`; ";
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
			<th>CAMP ID</th>
			<th>EMPLOYEE ID</th>
            <th>NAME OF THE CAMP</th>
            <th>LOCATION(area)</th>
		</tr>
	<?php
		while($rows=mysqli_fetch_assoc($res))
		{
	?>
			<tr>
				<td><?php echo $rows['ID']; ?></td>
				<td><?php echo $rows['EMPLOYEE_ID']; ?></td>
                <td><?php echo $rows['NAME']; ?></td>
				<td><?php echo $rows['LOCATION']; ?></td>
				
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







