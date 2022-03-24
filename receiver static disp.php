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
<style>body {
        background-image:
            url("images/10.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }</style>
<link rel="stylesheet" href="common.css">
        <div class="nav">
                <div class="topnav">
                        <a class="active" href="welcome.html">Home</a>
                        <a href="contact.html">Contact</a>
                         
                </div>
        </div><br><br>
		<h1 align='center'>RECEIVER ACCOUNTS INFORMATION</h1>
	<table align ="center" border="1px" style ="color:yellow;background-color:black;opacity:0.7; line-height:30px; line-height:30px;">
		
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







