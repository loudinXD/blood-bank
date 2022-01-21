<</p><?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
//$mysql_id=include('conn.php')


$query="SELECT * FROM `DONOR_STATIC`; ";
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
            <th>EMPLOYEE ID</th>
            <th>CONSULTANT DOCTOR</th>
            <th>REQUIERED QUANTITY</th>
            <th>HOSPITAL NAME</th>
            <th>REQUIRED BLOODGROUP</th>
            <th>DATE OF RECEIVING</th>
		</tr>
	<?php
		while($rows=mysqli_fetch_assoc($res))
		{
	?>
			<tr>
				<td><?php echo $rows['RECEIVER_ID']; ?></td>
				<td><?php echo $rows['EMPLOYEE_ID']; ?></td>
                <td><?php echo $rows['CONSULTANT_DOCTOR']; ?></td>
                <td><?php echo $rows['REQUIRED_QUANTITY']; ?></td>
                <td><?php echo $rows['HOSPITAL_NAME']; ?></td>
                <td><?php echo $rows['REQUIRED_BLOODGROUP']; ?></td>
                <td><?php echo $rows['REQUIRED_DATE']; ?></td>
				
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







