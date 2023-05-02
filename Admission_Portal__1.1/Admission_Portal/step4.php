<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <img style="padding:20px 10px 10px 20px" width="120" height="120" src="images/images-1.jpeg">
    <br>
    <center>
        <h2 style="font-family: Vineta BT">Government Science College<br>(Autonomus) Bangalore.</h2>
        <h3 style="font-family: algerian"><u>Admission Portal</u></h3><br>
        <div class="h2">
            <h3 style="color: #3b7687">abc</h3>
        </div><br>
    </center>
</head>

<?php
session_start();
    error_reporting(E_ERROR | E_PARSE);
if($_SESSION['rname']==true)                                    //checks user's session is same or not
{
      
     $name=$_SESSION['rname'];
 echo " <h2 align='center'>Welcome: <p6 style='color:#cc6600'>$name</p6></h2>";
}else{
   header('location:login.php');//after logout don't come back

}
?>

<body style="background: linear-gradient(-45deg,#238bd52e,#199ce685,#199ce685)">

    <form action="" method="post">
        <!-- Side Bar-->
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>MENU</header>
            <ul>
                <li><a href="main.php"><i class="fas fa-qrcode">Home</i></a></li>
                <li><a href="profile.php"><i class="fas fa-link">Profile Creation</i></a></li>
                <li><a href="print.php"><i class="fas fa-stream">View Application</i></a></li>
                <li><a href="status.php"><i class="fas fa-question-circle">Application Status</i></a></li>
                <li><a href="contact.html"><i class="fas fa-envelope">contact</i></a></li>
                <li><a href="logout.php"><i class="fas fa-envelope">Logout</i></a></li>

            </ul>
        </div>


        <!-- Options-->
        <div class="bisect">
            <div class="options">
                <ul>
                    <li><a href="main.php">Home</a></li>


                    <li><a href="profile.php">Create Profile</a>
                        <ul>
                            <li><a href="profile.php">Step1</a>
                            <li><a href="step2.php">Step2</a></li>
                            <li><a href="step3.php">Step3</a></li>
                            <li><a href="step4.php">Step4</a></li>
                            <li><a href="step5.php">Step5</a></li>
                        </ul>
                    </li>

                    <li><a href="print.php">View Application</a></li>
                    <li><a href="status.php">Application Status</a></li>
                    <li><a href="contact.html">HELP</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>



                <center>
                    <table align="center" border="2px" style="width: 1000px;
    height: 40px">
                        <tr style=" background-color: aqua">
                            <th><a href="profile.php">step 1<br>Personal Details</a></th>
                            <th><a href="step2.php">step 2<br>Adress Details</a></th>
                            <th><a href="step3.php">step 3<br>Education Details</a></th>
                            <th><a href="step4.php">step 4<br>Course Details</a></th>
                            <th><a href="step5.php">Step5<br>Upload Documents</a></th>
                        </tr>

                    </table>
                    <h3 style="color:blue">Step4: Course details</h3>

                    <?php
                   
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
   $name=$_SESSION['rname'];                 

                        $query="select * from student where name='$name'";
                        $result = mysqli_query($con,$query);
                        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>

                    UserName:<input type="text" name="rname" value="<?php echo $rows['name'];?>" readonly />

                    <?php
        }
    ?>
                    <br><br>
                    <table align="center" border="2px" style="width: 1000px;
    height: 40px">
                        <h4>UG Course Offered at our Government Science College</h4>
                        <tr style=" background-color: #6666ff">
                            <td colspan="3">
                                <h3>Select Course: (Field with <p6 style="color:red">*</p6> are mandatory)</h3>
                            </td>
                        </tr>
                        <tr style="line-height: 20px">
                            <td colspan="5">
                                <h4>Select Core Subjects:</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>Course:<p6 style="color:red">*</p6><br>
                                <select name="course" required>
                                    <option></option>
                                    <option>Bsc</option>
                                    <option>BCA</option>
                                </select></td>
                            <td colspan="2">
                                <h6>&nbsp;&nbsp;Refer Below Link for Course Details Offered in Our college:</h6>
                                <a href="images/gsc.pdf" target="_blank">&nbsp;&nbsp;Course Offered</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Subject1:<p6 style="color:red">*</p6>
                                <select name="sub1" required>
                                    <option></option>
                                    <option>Physics </option>
                                    <option>Electronics</option>
                                    <option>Computer Scince</option>
                                </select></td>
                            <td>Subject2:<p6 style="color:red">*</p6>
                                <select name="sub2" required>
                                    <option></option>
                                    <option>Physics </option>
                                    <option>Maths</option>
                                    <option>Computer Scince</option>
                                </select></td>
                            <td>Subject3:<p6 style="color:red">*</p6>
                                <select name="sub3" required>
                                    <option></option>
                                    <option>Physics </option>
                                    <option>Maths</option>
                                    <option>Computer Scince</option>
                                </select></td>
                        </tr>
                        <tr style="line-height: 20px">
                            <td colspan="5">
                                <h4>Select Language Subjects:</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lan I:<p6 style="color:red">*</p6>
                                <select name="lan1" required>
                                    <option></option>
                                    <option>kannada</option>
                                    <option>English</option>
                                    <option>Hindi</option>
                                    <option>Tamil</option>
                                    <option>Telgu</option>
                                    <option>Urdu</option>
                                </select>
                            </td>
                            <td>
                                Lan II:<p6 style="color:red">*</p6>
                                <select name="lan2" required>
                                    <option></option>
                                    <option>Kannada</option>
                                    <option>English</option>
                                    <option>Hindi</option>
                                    <option>Tamil</option>
                                    <option>Telgu</option>
                                    <option>Urdu</option>
                                </select>
                            </td>
                        </tr>

                    </table>

                    <br><input type="submit" value="Save" name="save" onclick="confir()">
                    <button><a href="step5.php">Next</a></button>

                    <br> <br>
                    <div class="h2">
                        <h3 style="color: #3b7687">abc</h3>
                    </div> <br>
                </center>
            </div>
        </div>

    </form>

    <style>
        input[type="submit"] {
                             width: 90px;
                             height: 40px;
                             background-color: #0066ff;
                             border: 2px solid black;
                             border-radius: 5px;
                             font-weight: bold;
                         }
                         input[type="submit"]:hover{
                             background-color: cornflowerblue;
                         }
                         input[type="submit"]:active {
                             background-color: aqua;
                             transform: scale3d(1.1, 1.1, 1.1);
                         }

                         button {
                             width: 90px;
                             height: 40px;
                             background-color: darkcyan;
                             border: 2px solid black;
                             border-radius: 5px;
                             font-weight: bold;
                         }

                         button:hover {
                             background-color: cornflowerblue;
                         }

                         button:active {
                             background-color: aqua;
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







    <style>
        table {

            border: 2px solid black;

        }

        tr {

            width: 1300px;
            line-height: 40px;


        }

    </style>


</body>

</html>







<?php

error_reporting(E_ERROR | E_PARSE);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'database');


if(isset($_POST['save']))
{
    $name=$_POST['rname'];
    $course=$_POST['course'];
    $subject1=$_POST['sub1'];
    $subject2=$_POST['sub2'];
    $subject3=$_POST['sub3'];
    $language1=$_POST['lan1'];
    $language2=$_POST['lan2'];
   
    
$s="select * from step4";
 
$result=mysqli_query($con,$s);

if($result)
      
   {
    $reg="insert into step4(name,COURSE,SUB1,SUB2,SUB3,LAN1,LAN2) values('$name','$course','$subject1','$subject2','$subject3','$language1','$language2')";
    mysqli_query($con,$reg);
  echo" <script type='text/javascript'>
    function confir()
        {
            if(confirm('Do you want To Save?'))
                {
        alert('Saved Sucessfull');
                }else{
            window.location.href='step4.php';
            
                   
                }
        }
    </script>"; 
}
    else
    {
        echo"<script type='text/javascript'>alert('Not Sucessfull');</script>";
    }
}

     ?>
