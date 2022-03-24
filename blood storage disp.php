<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
//$mysql_id=include('conn.php')


$query="SELECT * FROM `BLOOD_STORAGE`; ";
$res=mysqli_query($mysql_id,$query);
if($res->num_rows>0)
{
?>
<html>
<style>
                        body {
                                background-image: url('images/5.jpg');
                                background-repeat: no-repeat;
                                background-attachment: fixed;
                                background-size: cover;
                        }
						
                </style>
<link rel="stylesheet" href="common.css">
        <div class="nav">
                <div class="topnav">
                        <a class="active" href="welcome.html">Home</a>
                        <a href="contact.html">Contact</a>
                </div>
        </div><br><br>
	<title><head>Fetch from database</head></title>
<body>
	<div class='tab'>
	<table align ="center" border="2px" ; style ="width:600px; line-height:30px;background-color:yellow;
        opacity:0.4;
        align-items: center;">
		<tr>
			<th colspan = "4"><h2>INVENTORY</h2></th>
		</tr>
		<tr>
			<th>BLOOD TYPE</th>
			<th>QUANTITY (ML)</th>
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
	</div>
</body>
</html>
<?php
}
else
	echo "Empty set";
?>







