<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
//$mysql_id=include('conn.php')


$query="SELECT * FROM `BLOOD_STORAGE`; ";
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
        </div><br><br>
	<title><head>Fetch from database</head></title>
<body>
	<div class='tab'>
	<table align ="center" border="2px" ; style ="width:600px; line-height:30px;background-color:yellow;
        opacity:0.4;
        align-items: center;">
		<tr>
			<th colspan = "4"><h2>BLOOD INVENTORY</h2></th>
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








<html>

    <head>

        <title>BLOOD BANK</title>
    </head>


    <!DOCTYPE html>
    <html>
    <style>
        body {
        background-image:
            url("images/9.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }form {
        width: 30%;
        margin: 60px auto;
        background: #d47878;
        padding: 60px 120px 80px 120px;
        text-align: center;
        -webkit-box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);
        box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);
        opacity: .6;
    }

    label {
        display: block;
        position: relative;
        margin: 40px 0px;
    }

    .label-txt {
        position: absolute;
        top: -1.6em;
        padding: 10px;
        font-family: sans-serif;
        font-size: .8em;
        letter-spacing: 1px;
        color: rgb(120, 120, 120);
        transition: ease .3s;
    }

    .input {
        width: 100%;
        padding: 10px;
        background: transparent;
        border: none;
        outline: none;
    }

    .line-box {
        position: relative;
        width: 100%;
        height: 2px;
        background: #BCBCBC;
    }

    .line {
        position: absolute;
        width: 0%;
        height: 2px;
        top: 0px;
        left: 50%;
        transform: translateX(-50%);
        background: #8BC34A;
        transition: ease .6s;
    }

    .input:focus+.line-box .line {
        width: 100%;
    }

    .label-active {
        top: -3em;
    }

    button {
        display: inline-block;
        padding: 12px 24px;
        background: rgb(220, 220, 220);
        font-weight: bold;
        color: rgb(120, 120, 120);
        border: none;
        outline: none;
        border-radius: 3px;
        cursor: pointer;
        transition: ease .3s;
    }

    button:hover {
        background: #8BC34A;
        color: #ffffff;
    }

    h1 {
        color: aquamarine;
        text-align: center;
        background-color: black;
        height: 50px;
        opacity:0.8;
        width :800px;

    }
    </style>

    <body>
        <center>
            <h1>FORM TO RECEIVE BLOOD</h1>
        </center>
        <form action="receiver variable.php" method="post">

            <center><b>Enter receiver's id:<input type="text" name="R_Id" required /></b></center><br /><div class="line-box">
                <div class="line"></div>
            </div>
            <center><b>Enter employee's id:<input type="text" name="E_id" required /></b></center><br /><div class="line-box">
                <div class="line"></div>
            </div>
            <center><b>Enter required quantity:<input type="text" name="quant"  /></b></center></br><div class="line-box">
                <div class="line"></div>
            </div>
            <center><b>Enter hospital name:<input type="text" name="h_name" required /></b></center><br /><div class="line-box">
                <div class="line"></div>
            </div>
            <center><b>Enter the required type:<select name = "b_type">
                                        <option selected>TYPE</option>
                                        <option value = "A+">A+</option>
                                        <option value = "A-">A-</option>
                                        <option value = "B+">B+</option>
                                        <option value = "B-">B-</option>
                                        <option value = "AB+">AB+</option>
                                        <option value = "AB-">AB-</option>
                                        <option value = "O+">O+</option>
                                        <option value = "O-">O-</option>
                                     </select></b>
            </center><br /><div class="line-box">
                <div class="line"></div>
            </div>
            <center><b>Enter blood receiving date:<input type="date" name="r_date" required /></b></center><br /><div class="line-box">
                <div class="line"></div>
            </div>
            <center><b>Enter the name of consultant doctor:<input type="text" name="doctor" required /></b></center><br /><div class="line-box">
                <div class="line"></div>
            </div>
            <center><input type="submit" value="submit"></center><br />
        </form>
    </body>

</html>