<?php
$mysql_id = mysqli_connect("localhost", "root", "", "bloodbank_db");
$query = "SELECT * FROM `DONOR_STATIC` ;";
$res = mysqli_query($mysql_id, $query);
?>
    <link rel="stylesheet" href="common.css">
        <div class="nav">
                <div class="topnav">
                        <a class="active" href="welcome.html">Home</a>
                        <a href="contact.html">Contact</a>
                         
                </div>
                
            </div>

<style>
                        body {
                                background-image: url('images/11.jpg');
                                background-repeat: no-repeat;
                                background-attachment: fixed;
                                background-size: cover;
                        }
                        .tab{

                        }
                        
    form {
        width: 30%;
        margin: 60px auto;
        background: #ca3e3e;
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
        border-radius:35px;
        width:1100px;


    }
</style>
                <center><h1 >DATA OF DONORS</h1></center>
<table align="center" border="1px" style="background-color:black;color:grey;width:600px; line-height:30px;">
    <tr>
        <th colspan="7">
            <h2>INVENTORY</h2>
        </th>
    </tr>
    <tr>
        <th>DONOR ID</th>
        <th>DONOR NAME</th>
        <th>GENDER</th>
        <th>BIRTH DATE</th>
        <th>ADDRESS</th>
        <th>BLOODGROUP</th>
        <th>MOBILE NUMBER</th>
        <th>EMAIL</th>
        
    </tr>
    <?php while ($rows = mysqli_fetch_assoc($res)) { ?>
    <tr>
        <td><?php echo $rows["ID"]; ?></td>
        <td><?php echo $rows["NAME"]; ?></td>
        <td><?php echo $rows["SEX"]; ?></td>
        <td><?php echo $rows["DOB"]; ?></td>
        <td><?php echo $rows["ADDRESS"]; ?></td>
        <td><?php echo $rows["BLOODGROUP"]; ?></td>

        <td><?php echo $rows["PHONE"]; ?></td>
        <td><?php echo $rows["EMAIL"]; ?></td>
    </tr>
    <?php } ?>
</table>
<html>
    <body>
        <center><h1>DONOR UPDATION FORM</h1></center>
        <form action="up donor2.php" method="post">
        <label><b>Enter the donor id which cannot be changed:<input type="text" name="Id" required /></b>
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label><b>Enter donor's name:<input type="text" name="Name" required /></b>
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label><b>
                <p>Enter donor's gender:</p>
            </b>
            <b><input type="radio" name="Gdr" value="male">MALE</b>
            <b><input type="radio" name="Gdr" value="female">FEMALE</b>
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label><b>Enter donor's birth-date:<input type="date" name="birth" required /></b>
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label><b>Enter donor's address:<input type="text" name="Address" required /></b>
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label><b>Enter donor's bloodgroup:<input type="text" name="bloodgroup" required /></b>
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label><b>Enter donor's phone number:<input type="text" name="Mobile_no"></b>
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label><b>Enter donor's Email:<input type="text" name="Email" required /></b>
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        
        <input type="submit" value="submit">
        <br />
        </form>
    </body>
    </html>
 
