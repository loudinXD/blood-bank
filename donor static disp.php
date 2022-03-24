<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
//$mysql_id=include('conn.php')


$query="SELECT * FROM `DONOR_STATIC`; ";
$res=mysqli_query($mysql_id,$query);
if($res->num_rows>0)
{
?>
<html>
<link rel="stylesheet" href="common.css">
        <div class="nav">
                <div class="topnav">
                        <a class="active" href="welcome.html">Home</a>
                        <a href="contact.html">Contact</a>
                         
                </div>
        </div>
	<title><head>Fetch from database</head></title>
	<style>
		body {
                                background-image: url('images/6.jpg');
                                background-repeat: no-repeat;
                                background-attachment: fixed;
                                background-size: cover;
                        }
		</style>
<body>
	<br>
	<h1 align ="center" style=color:white;>DONOR INFORMATION</h1>
	<table align ="center" border="1px" style ="width:1000px; line-height:30px;background-color:black;color:#0000ff;opacity:0.9;">
		
		<tr>
			<th>DONOR ID</th>
			<th>DONOR NAME</th>
            <th>GENDER</th>
            <th>BIRTH DATE</th>
            <th>ADDRESS</th>
            <th>MOBILE NUMBER</th>
            <th>EMAIL</th>
            <th>BLOOD GROUP</th>
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
                <td><?php echo $rows['BLOODGROUP']; ?></td>
                
				
				
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







