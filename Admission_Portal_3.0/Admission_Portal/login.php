<!DOCTYPE html>
<html lang="en">

<head></head>

<body style="background: linear-gradient(-445deg,#1470d4,#20a5b985,#079cef)">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="includes/css/style.css">
    

    <script src="js/script.js"></script>

    <img style="padding:20px 10px 10px 20px" width="120" height="120" src="images/images-1.jpeg">
    <center>
        <h2 style="font-family: Vineta BT">Government Science College<br>(Autonomus) Bangalore.</h2>
        <h3 style="font-family: algerian; font-weight:1"><u>Admission Portal</u></h3><br>
    </center>

   
    <!--menu-->
    <nav class="menu">
        <a  href="Disclaimer.html">Disclaimer</a> ||
        <a href="Terms%20and%20Conditions.html">Terms and Conditions</a>||
        <a href="Privacy.html">Privacy</a> ||
        <a href="about.html"> About Us</a>


       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
        &nbsp;&nbsp; &nbsp;&nbsp;
        &nbsp;&nbsp; &nbsp;&nbsp;
      



        <a href="New%20user.php">New User</a> ||
        <a href="contact.html">Contact Us</a> ||
        <a href="Privacy.html">Privacy</a> ||
            <a href="Trouble%20Logging%20in.html">Trouble Logging in</a>
       
    </nav>
    <br><br><br><br><br><br><br><br>

    <!-- login validation -->


    <div class="loginbox">
        <img src="images/images-1.jpeg" class="image">

        <form action="includes/ConfigPhpFiles/login.php" method="post">
            <p>Username: <p6 style="color:red">*</p6>
            </p>
            <input title="Please Fill your name" type="text" placeholder="Username" required name="rname">
            <p>Password: <p6 style="color:red">*</p6>
            </p>
            <input title="Please Type Your Password" type="password" placeholder="Password" required name="rpass">

            <br>
            <a style="color: blue" href="Forgot%20password.html"> Forgot Password?</a><br>
            <a style="color: red; font-size:16px" href="New%20user.php"> Don't have account? Register Here</a>
            <input type="submit" value="Login" name="OK">
            <input type="reset" value="Cancel" name="cancel">

        </form>

    </div>
</body>
    
</html>

