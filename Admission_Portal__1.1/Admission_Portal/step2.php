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
if($_SESSION['rname']==true)                                    //checks user's session is same or not
{
      
     $name=$_SESSION['rname'];
    echo " <h2 align='center'>Welcome: <p6 style='color:#cc6600'>$name</p6></h2>";

}else{
   header('location:login.php');//after logout don't come back

}
?>




<body style="background: linear-gradient(-45deg,#238bd52e,#199ce685,#199ce685)">
    <script type="text/javascript" src="js/script.js"></script>





    <script type="text/javascript">
        function copy() {
            if (chek.checked == true) {
                document.getElementById('address2').value = document.getElementById('address1').value;
                document.getElementById('union2').value = document.getElementById('union1').value;
                document.getElementById('dist2').value = document.getElementById('dist1').value;
                document.getElementById('taluk2').value = document.getElementById('taluk1').value;
                document.getElementById('city2').value = document.getElementById('city1').value;
                document.getElementById('pin2').value = document.getElementById('pin1').value;
            } else {
                document.getElementById('address2').value = '';
                document.getElementById('union2').value = '';
                document.getElementById('dist2').value = '';
                document.getElementById('taluk2').value = '';
                document.getElementById('city2').value = '';
                document.getElementById('pin2').value = '';
            }
        }

    </script>



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
                    <h3 style="color:blue">Step2: Adress details</h3>

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

                    <table align="center" border="2px" style="width: 1000px;
    height: 40px">
                        <tr style=" background-color: #6666ff">
                            <td colspan="3">
                                <h3>Permanent Adress (Field with <p6 style="color:red">*</p6> are mandatory)</h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"> House Name:<input type="text" name="house" required><br>
                                Address:<p6 style="color:red">*</p6><br>
                                <textarea cols="50" rows="4" name="address1" id="address1" placeholder="Full Address" required>
                        </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                state / Union Territory:<p6 style="color:red">*</p6>
                                <select name="union1" id="union1" required>
                                    <option>select</option>
                                    <option>Karnataka</option>
                                </select>
                            </td>
                            <td>
                                District:<p6 style="color:red">*</p6>
                                <select name="dist1" id="dist1" required>
                                    <option>select</option>
                                    <option>Karnataka</option>
                                </select>
                            </td>
                            <td>
                                Taluk:<p6 style="color:red">*</p6>
                                <select name="taluk1" id="taluk1" required>
                                    <option>select</option>
                                    <option>Karnataka</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Village/City:<p6 style="color:red">*</p6>
                                <select name="city1" id="city1" required>
                                    <option>select</option>
                                    <option>Karnataka</option>
                                </select>
                            </td>
                            <td>PinCode:<p6 style="color:red">*</p6>
                                <input type="number" required name="pin1" id="pin1"></td>
                        </tr>
                    </table>



                    <input type="checkbox" name="chek" id="chek" onclick="copy()">Tick if you are residing at the Permanent adress?<br>
                    <p6 style="color:red">College authority will Communoicate With Permanent Adress, So enter valid Adress For Communication</p6> <br>



                    <table align="center" border="2px" style="width: 1000px;
    height: 40px">
                        <tr style=" background-color: #6666ff">
                            <td colspan="3">
                                <h3>Residentical Adress (Field with <p6 style="color:red">*</p6> are mandatory)</h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"> Adress:<p6 style="color:red">*</p6><br>
                                <textarea cols="50" rows="4" name="address2" id="address2" required>
                        </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                state / Union Territory:<p6 style="color:red">*</p6>
                                <select name="union2" id="union2" required>
                                    <option>select</option>
                                    <option>Karnataka</option>
                                </select>
                            </td>
                            <td>
                                District:<p6 style="color:red">*</p6>
                                <select name="dist2" id="dist2" required>
                                    <option>select</option>
                                    <option>Karnataka</option>
                                </select>
                            </td>
                            <td>
                                Taluk:<p6 style="color:red">*</p6>
                                <select name="taluk2" id="taluk2" required>
                                    <option>select</option>
                                    <option>Karnataka</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Village/City:<p6 style="color:red">*</p6>
                                <select name="city2" id="city2" required>
                                    <option>select</option>
                                    <option>Karnataka</option>
                                </select>
                            </td>
                            <td>PinCode:<p6 style="color:red">*</p6>
                                <input type="number" name="pin2" id="pin2" required></td>
                        </tr>
                    </table>
                    <br>
                    <input type="submit" value="Save" name="save" onclick="confir()">
                    <button><a href="step3.php">Next</a></button>
                    <br> <br>
                    <div class="h2">
                        <h3 style="color: #3b7687">abc</h3>
                    </div> <br>
                </center>
            </div>
        </div>

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
            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outter-spin-button {
                /* to remove arrows in input type="number"   */
                -webkit-appearance: none;
                -moz-appearance: none;
                margin: 0;
            }
            


        </style>


    </form>




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
    $housename=$_POST['house'];
    $permanentaddress=$_POST['address1'];
    $permanentunion=$_POST['union1'];
    $permanentdistrict=$_POST['dist1'];
    $permanenttaluk=$_POST['taluk1'];
    $permanentcity=$_POST['city1'];
    $permanentpin=$_POST['pin1'];
    $residenticaladdress=$_POST['address2'];
    $residenticalunion=$_POST['union2'];
    $residenticaldistrict=$_POST['dist2'];
    $residenticaltaluk=$_POST['taluk2'];
    $residenticalcity=$_POST['city2'];
    $residenticalpin=$_POST['pin2'];

$s="select * from step2";
 
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($result==true)
      
   {
    $reg="insert into step2(name,HOUSENAME,PERMANENTADDRESS,PERMANENTUNION,PERMANENTDISTRICT,PERMANENTTALUK,PERMANENTCITY,PERMANENTPIN,RESIDENTICALADDRESS,RESIDENTICALUNON,RESIDENTICALDISTRICT,RESIDENTICALTALUK,RESIDENTICALCITY,RESIDENTICALPIN) values('$name','$housename','$permanentaddress','$permanentunion','$permanentdistrict','$permanenttaluk',' $permanentcity','$permanentpin',' $residenticaladdress','$residenticalunion','$residenticaldistrict','$residenticaltaluk',' $residenticalcity','$residenticalpin')";
    mysqli_query($con,$reg);
  echo" 
     <script type='text/javascript'>
    function confir()
        {
            if(confirm('Do you want To Save?'))
                {
        alert('Saved Sucessfull');
                }else{
            window.location.href='step2.php';
                }
        }
    </script>"; 
}
    else
    {
        echo"not sucessfull";
    }
}

     ?>
