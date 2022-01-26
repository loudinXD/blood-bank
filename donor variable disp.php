<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
//$mysql_id=include('conn.php')


$query="SELECT * FROM `DONOR_VARIABLE`; ";
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
			<th>DONOR ID</th>
			<th>CAMP ID</th>
            <th>EMPLOYEE ID</th>
            <th>HEALTH ISSUE</th>
            <th>WEIGHT</th>
            <th>LAST DONATED</th>
            <th>TIMES DONATED</th>
            <th>DONATED DATE</th>
		</tr>
	<?php
		while($rows=mysqli_fetch_assoc($res))
		{
	?>
			<tr>
				<td><?php echo $rows['DONOR_ID']; ?></td>
				<td><?php echo $rows['CAMP_ID']; ?></td>
                <td><?php echo $rows['EMPLOYEE_ID']; ?></td>
                <td><?php echo $rows['HELATH_ISSUES']; ?></td>
                <td><?php echo $rows['WEIGHT']; ?></td>
                <td><?php echo $rows['LAST_DONATED']; ?></td>
                <td><?php echo $rows['TIMES_DONATED']; ?></td>
				<td><?php echo $rows['DONATED_DATE']; ?></td>
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







