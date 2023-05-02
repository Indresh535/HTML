<!DOCTYPE html>
<html lang="en">

<head>

<body style="background: linear-gradient(-445deg,#1470d4,#20a5b985,#079cef)">

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js"></script>
    <img style="padding:20px 10px 10px 20px" width="120" height="120" src="images/images-1.jpeg">
    <br>
        <center>
        <h2 style="font-family: Vineta BT">Government Science College<br>(Autonomus) Bangalore.</h2>
        <h3 style="font-family: algerian"><u>Admission Portal</u></h3><br>
        </center>
   

    <div class="h2">
        <h3 style="color: #3b7687">abc<h4 style="color: #3b7687">abc</h4>
        </h3>
    </div>
    <form action="" method="post">
        <div style="top: 15%; width: 500px; border: 2px solid black; border-radius: 30px " class="loginbox">
            <h2 align="center"><u>Admin Login</u></h2>

            <p>Username: <p6 style="color:red">*</p6>
            </p>
            <input type="text" placeholder="Username" required name="adminname">
            <p>Password: <p6 style="color:red">*</p6>
            </p>
            <input type="password" placeholder="Password" required name="adminpass">

            <br>
            <a style="color: blue" href="Forgot%20password.html"> Forgot Password?</a><br><br>
            <input type="submit" value="Login" class="btn btn-primary" name="submit">
            <input type="reset" value="Cancel" class="btn btn-primary">

        </div>
    </form>
 
</body>
</head>

</html>






<?php

session_start();
error_reporting(E_ERROR | E_PARSE);

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'database');

if(isset($_POST['submit']))
{
$name=$_POST['adminname'];
$pass=$_POST['adminpass'];

$s="select * from admin where name='$name' && password='$pass'";
 
    $result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);// to check all rows
   
if($num==1)
   {
   
     $_SESSION['adminname']=$name;
     $name=$_POST['adminname'];
     header('location:adminpage.php');
   } else{
      echo"<script type='text/javascript'>alert('Invalid Username or Password');</script>"; 
}
}
