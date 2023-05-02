<?php
    include 'includes/designs/header.php'
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Portal</title>
    <style>
        p1 {
            border: 3px solid black;
            width: 250px;
            height: 400px;
            float: left;
            top: -100px;
            border-radius: 20px;
            text-align: center;
        }

        p2 {
            border: 3px solid black;
            width: 250px;
            height: 400px;
            float: right;
            margin: 1px;
            border-radius: 20px;
            text-align: center;
        }

        button {
            width: 90px;
            height: 40px;
            background: linear-gradient(360deg, #007bff, #17a2b8, #17a2b8);
            border: 2px solid black;
            border-radius: 5px;
            font-weight: bolder;
            cursor: pointer;
        }

        button:hover {
            background-color: blueviolet;
        }

        button:active {
            background-color: darkblue;
            transform: scale3d(1.1, 1.1, 1.1);
        }

        a {
            color: darkblue;
            font-family: Bahnschrift;
            font-size: 20px;
        }

        a:hover {
            color: darkorchid;
        }

    </style>

    <p1>
        <center>
            <br><br>
            <h4 style="font-family: Bernard MT Condensed"><b><u>STUDENT LOGIN</u></b></h4>
            <button><a href="login.php">Login</a></button><br>
            <a href="new_user.php">New User Click-Here</a>
            <br><br><br><br><br>
            <h4 style="font-family: Bernard MT Condensed"><b><u>ADMIN LOGIN</u></b></h4>
            <button><a href="adminlogin.php">&nbsp; Login &nbsp;</a></button><br>
            <a href="New%20admin.html">New User Click-Here</a>
        </center>
    </p1>
    <p2>
        <center> <br><br>
            <h4 style="font-family: Bernard MT Condensed"><u>SERVICES</u></h4>
            <br>
            <br>
            <marquee behavior="scroll" direction="up" width="80%" height="200px" scrolldelay="0" scrollamount="2">
                <ul>
                    <li><a href="about.html">1.About College</a></li>
                    <li><a href="login.php">2.Login</a></li>
                    <li><a href="new_user.php">3.Register</a></li>
                    <li><a href="#">4.Online Appication</a></li>
                    <li><a href="Trouble%20Logging%20in.html">5.Trouble Logging</a></li>
                    <li><a href="adminlogin.php">6.Online Admission</a></li>
                    <li><a style="font-size: 18px" href="Terms%20and%20Conditions.html">7.Terms and Conditions</a></li>
                    <li><a href="Disclaimer.html">8.Disclaimer</a></li>
                    <li><a href="Privacy.html">9.DashBoard</a></li>
                    <li><a href="contact.html">10.Help</a></li>
                    <li><a href="contact.html">11.Contact</a></li>
                    <li><a href="index.html">12.Services</a></li>

                </ul>
            </marquee>
        </center>
    </p2><br>

</body>
<style>
    div.slider-frame {
        border: 5px solid black;
        border-radius: 20px;
        overflow: hidden;
        height: 350px;
        width: 750px;
        margin-left: 300px;
        background-image: url(images/images-4.jpeg);
    }

    @keyframes slide_animation {
        0% {
            left: 0px;
        }

        10% {
            left: 750px;
        }

        20% {
            left: 1500px;
        }

        30% {
            left: 2300px;
        }

        40% {
            left: 2300px;
        }

        50% {
            left: 750px;
        }

        60% {
            left: 1500px;
        }

        70% {
            left: 2300px;
        }

        80% {
            left: 0px;
        }

        90% {
            left: 750px;
        }

        100% {
            left: 1500px;
        }
    }

    div.slide-images {
        height: 350px;
        width: 2300px;
        margin: 0 0 0 -2150px;
        position: relative;
        animation-name: slide_animation;
        animation-duration: 30s;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        animation-play-state: running;
    }

    div.img-container {
        height: 350px;
        width: 750px;
        position: relative;
        float: left;
    }

</style>
<div class="slider-frame">
    <div class="slide-images">
        <div class="img-container">
            <img src="images/images.jpeg">
        </div>
        <div class="img-container">
            <img src="images/images-3.jpeg">
        </div>
        <div class="img-container">
            <img src="images/images-2.jpeg">
        </div>
    </div>
</div>
<br><br>
<div class="h2">
    <h3 style="color: #3b7687">abc</h3>
</div>

</html>