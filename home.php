<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Wix.com Website Builder" />
    <link rel="stylesheet" href="common.css">
<style>
            
        body {
        background-image: url('images/8.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }
                        
                .donors,.donorv,.storage,.receivers,.receiverv,.camps{
                        border-style: double;
                        border-radius: 25px;
                        text-align:center;
                        background:aquamarine;
                        opacity:0.4;
                        align-items: center;
                        width :500px;
                        
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
    
</style>
</head>

<body>
        
        <div class="nav">
                <div class="topnav">
                        <a class="active" href="welcome.html">Home</a>
                        <a href="contact.html">Contact</a>
                         
                </div>
        </div>
        <br>
    <title>DROPS OF LIFE</title>
    <center><img style="border-radius: 35px;" src="images/14.PNG" alt="Paris" ></center>
    <br><br>
    
        
</div><br><BR>
<div align="center" class = "all">
<div class='donors'>
<a href="blood storage disp.php">BLOOD STORAGE</a><br>
        
</div><br>
<div class='donors'>
        <a href="donor static.html">CREATE DONOR ACCOUNT </a><br>
        <div class="line-box">
                <div class="line"></div>
            </div>
        <a href="up doner.php">UPDATE DONOR</a><br>
        <div class="line-box">
                <div class="line"></div>
            </div>
        <a href="donor static disp.php">DISPLAY DONOR ACCOUNTS</a><br>
</div><br>
<div class = 'donorv'>
        <a href="donor variable.html">FORM TO DONATE BLOOD</a><br>
        <div class="line-box">
                <div class="line"></div>
            </div>
        <a href="donor variable disp.php">BLODD DONATIONS </a><br>
        </div><br><BR>
<div class = 'receivers'>
        <a href="receiver static.html">CREATE RECEIVER ACCOUNT  </a><br>
        <div class="line-box">
                <div class="line"></div>
            </div>
        <a href="up receiver.php">UPDATE RECEIVER</a><br>
        <div class="line-box">
                <div class="line"></div>
            </div>
        <a href="receiver static disp.php">DISPLAY RECEIVER ACCOUNTS</a><br>
        </div><br>
        <div class = 'receiverv'>
        <a href="receiver variable.php">FORM TO RECEIVE BLOOD</a><br>
        <div class="line-box">
                <div class="line"></div>
            </div>
        <a href="receiver variable disp.php">RECEIVED BLOOD</a><br>
    </div><br><BR>
    <div class = 'camps'>
    <a href="camps.html">CREATE CAMPS</a><br>
    <div class="line-box">
                <div class="line"></div>
            </div>
        <a href="camps disp.php">DISPLAY CAMPS</a><br>
    </div>
</div>
</body>


</html>