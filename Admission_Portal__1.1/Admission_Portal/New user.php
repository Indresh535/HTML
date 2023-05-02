<!DOCTYPE html>
<html lang="en">

<head>

<body style="background: linear-gradient(-445deg,#1470d4,#20a5b985,#079cef)">
    <meta charset="UTF-8">
    <script src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">



    <img style="padding:20px 10px 10px 20px" width="120" height="120" src="images/images-1.jpeg">
    <center>
       <h2 style="font-family: Vineta BT">Government Science College<br>(Autonomus) Bangalore.</h2>
        <h3 style="font-family: algerian; font-weight:1"><u>Admission Portal</u></h3><br>

    </center>
    <div class="h2">
        <h3 style="color: #3b7687">abc</h3>
    </div>

    <!-- Script to confirm password-->
    <script type="text/javascript">
        function validate() {
            if (document.Newuser.rpass.value ==
                document.Newuser.repass.value)
                return;
            else
                alert(" Password Don't match");
        }
        
    </script>

    <!-- Registration  Post -->

    <div class="signupbox">
        <form name="Newuser" action="" method="post" enctype="multipart/form-data">
            <fieldset style=" border: 5px groove white">
                <center>


                    <br>
                    <h4><u>Student Regstration Page</u></h4><br>
                    <p6 style="color:red">Note: Your First name will be considered as Username</p6>
                    <p>First Name:<p6 style="color:red">*</p6>
                        <input type="text" placeholder="First name" required name="rname">
                        &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        Last Name:
                        <input type="text" placeholder="Last name" name="rlname"><br></p>
                    <br>
                    <p>Father Name:<p6 style="color:red">*</p6>
                        <input type="text" placeholder="Father name" required name="rfname">
                        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        Mother Name:<p6 style="color:red">*</p6>
                        <input type="text" placeholder="Mother name" name="rmname"></p><br>
                    <p>Gender:<p6 style="color:red">*</p6> &nbsp;&nbsp; <input type="radio" name="gender" required value="male">Male &nbsp;&nbsp;
                        <input type="radio" name="gender" value="female">Female&nbsp;&nbsp;
                        <input type="radio" name="gender" value="other">Other</p><br>
                    <p>DOB:<p6 style="color:red">*</p6>
                        <input type="date" palceholder="date of birth" required name="rdob">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        &nbsp; &nbsp;&nbsp;
                        PU College:<p6 style="color:red">*</p6>
                        <select>
                            <option> </option>
                            <option>1. college name</option>
                            <option>2. college name</option>
                            <option>3. college name</option>
                            <option>4. college name</option>
                            <option>5. college name</option>
                        </select>
                    </p><br>
                    <p>Phone No.:<p6 style="color:red">*</p6>
                        <input type="tel" placeholder="Phone Number" maxlength="10" name="rphno">
                        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        &nbsp; &nbsp;
                        E-mail:<p6 style="color:red">*</p6>
                        <input type="email" placeholder="E-mail Id" name="remail"></p>
                    <p>Password:<p6 style="color:red">*</p6>
                        <input type="password" placeholder="Password" required name="rpass" title="password should be greater than 10 character">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Confirm Password: <p6 style="color:red">*</p6>
                        <input type="password" placeholder=" Confirm Password" required name="repass" onmouseout="validate()"></p><br>
                    <p>Photo:<p6 style="color:red">*</p6>
                        <input type="file" accept="image/*" name="rphoto" id="rphoto" onchange="uploadCheck" placeholder="recent photo"><br>
                        <p6 style="color:red">Note: The image size(jpg,jpeg only) Should be less than 100kb. </p6>
                    </p>
                    <br>

                    <input type="submit" value="Signup" onmouseover="validate()" name="ok">
                    &nbsp;
                    <input type="reset" value="Cancel">

                </center>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Have already Regesteried?</b><a style="color:blue; font-size:20px; font-weight:bolder" href="login.php">Click Here</a><br><br>
            </fieldset>
        </form>
    </div>
</body>
</head>
    <script type="text/javascript">
    var uploadCheck = document.getElementById("rphoto");
        uploadCheck.onchange = function(){
            if(this.files[0].size>102400){
                alert("Image Size should be less than 100kb!!");
                this.value="";
            }
        }

    </script>

</html>






<?php

error_reporting(E_ERROR | E_PARSE);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'database');


if(isset($_POST['ok']))
{
$name=$_POST['rname'];
$pass=$_POST['rpass'];
$phno=$_POST['rphno'];
$email=$_POST['remail'];
$photo=addslashes(file_get_contents($_FILES['rphoto']['tmp_name']));
$s="select * from student where name='$name'";
 
$result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($num ==1){
      echo"<script type='text/javascript'>alert('Username already Exist');</script>"; 
   } else{
    $reg="insert into student(name,password,phno,email,photo) values('$name','$pass','$phno','$email','$photo')";
    mysqli_query($con,$reg);
  echo"<script type='text/javascript'>alert('Registered Sucessfull');</script>"; 
}
}

     ?>
