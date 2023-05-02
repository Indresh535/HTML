 <!-- STEP1(PROFILE) -->
 <!DOCTYPE html>
 <html lang="en">



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
     <script src="js/script.js"></script>

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
                     </table><br>

                     <h3 style="color:blue">Step1: Personal details</h3>




                     <?php
                   
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
   $name=$_SESSION['rname'];                 

                        $query="select * from student where name='$name'";
                        $result = mysqli_query($con,$query);
                        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>

                     UserName:<input type="text" name="rname" value="<?php echo $rows['name'];?>" readonly /> <br>

                     <?php
        }
    ?>




                     <table align="center" border="2px" style="width: 1000px;
    height: 40px">
                         <tr style=" background-color: #6666ff">
                             <td colspan="2">
                                 <h3>Proof details (Field with <p6 style="color:red">*</p6> are mandatory)</h3>
                             </td>
                         </tr>
                         <tr>
                             <td>Please Select ID type:<p6 style="color:red">*</p6><br><select name="ridtype" required>
                                     <option></option>
                                     <option>Aadhaar Card</option>
                                     <option>Ration card</option>
                                     <option>Voter Id</option>
                                     <option>Driving Licence</option>
                                     <option>Passport</option>
                                 </select></td>
                             <td>Identity No.:<p6 style="color:red">*</p6>
                                 <input type="text" name="ridno">
                             </td>
                         </tr>
                     </table><br>
                     <table align="center" border="2px" style="width: 1000px;
    height: 40px">
                         <tr style=" background-color: #6666ff">
                             <td colspan="5">
                                 <h3>Personal Details
                                     (Field with<p6 style="color:red">*</p6> are mandatory)</h3>
                             </td>
                         </tr>
                         <tr>
                             <td>Nationality:<p6 style="color:red">*</p6><br><select name="rnation" required>
                                     <option></option>
                                     <option>Indian</option>
                                     <option>Forigener</option>
                                     <option>3</option>
                                 </select></td>
                             <td>Gender:<p6 style="color:red">*</p6><br><select name="rgender" required>
                                     <option></option>
                                     <option>Male</option>
                                     <option>Female</option>
                                     <option>Other</option>
                                 </select>
                             </td>

                             <?php
                   
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
   $name=$_SESSION['rname'];                 

                        $query="select * from student where name='$name'";
                        $result = mysqli_query($con,$query);
                    
  
        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>



                             <td colspan="3">Full Name(in English as per SSLC/10th std or equivalent certificate)<p6 style="color:red">*</p6><br> <input type="text" value="   <?php echo $rows['name']; ?>" name="rfull">
                             </td>
                         </tr>
                         <tr>
                             <td>Father's Name as per SSLC/10th std or equivalent certificate<p6 style="color:red">*</p6><br> <input type="text" name="rfather" required></td>

                             <td colspan="4">Mother's Name<p6 style="color:red">*</p6> <br> <input type="text" name="rmother" required></td>
                         </tr>

                         <tr>
                             <td>Email Id:<p6 style="color:red">*</p6><br><input type="email" v value="
                         <?php echo $rows['email']; ?>" disabled></td>
                             <td>Landline with STD Code:<br><input type="text" name="rstd"></td>
                             <td>Mobile Number:<p6 style="color:red">*</p6><br><input type="tel" value="<?php echo $rows['phno']; ?>" disabled></td>

                             <?php
        }
                         ?>





                             <td>Date Of Birth:<p6 style="color:red">*</p6><br><input type="date" name="rdob" required></td>
                             <td>Age:<p6 style="color:red">*</p6><br><input type="text" name="rage" required></td>
                         </tr>
                         <tr>
                             <td>Whether Domicile of karnataka?<p6 style="color:red">*</p6><br>
                                 <select name="rdomicile" required>
                                     <option></option>
                                     <option>Yes</option>
                                     <option>
                                         No</option>
                                 </select></td>
                             <td>Are you Differently abled Person(PH)<p6 style="color:red">*</p6><br>
                                 <select name="rph" required>
                                     <option></option>
                                     <option>No</option>
                                     <option>Yes</option>
                                 </select></td>
                             <td>Are you Married?<p6 style="color:red">*</p6><br>
                                 <select name="rmarried" required>
                                     <option></option>
                                     <option>No</option>
                                     <option>Yes</option>
                                 </select></td>
                         </tr>

                     </table>
                     <table align="center" border="2px" style="width: 1000px;
    height: 40px"><br>
                         <tr style=" background-color: #6666ff">
                             <td colspan="5">
                                 <h3>Reservation Claimed (Field with <p6 style="color:red">*</p6> are mandatory) </h3>
                             </td>
                         </tr>
                         <tr>
                             <td>Category<p6 style="color:red">*</p6><br>
                                 <select name="rcat" required>
                                     <option></option>
                                     <option>Category 1</option>
                                     <option>Category 2</option>
                                     <option>Category 3</option>
                                 </select></td>
                             <td colspan="3">Sub Caste<p6 style="color:red">*</p6><br><input type="text" name="rsubcat" required></td>
                         </tr>
                         <tr>
                             <td>Certificate No(RD No)<p6 style="color:red">*</p6><br><input type="text" required name="rRdno"></td>
                             <td>Place of Issue:<p6 style="color:red">*</p6><br>
                                 <select name="rplaceissue" required>
                                     <option></option>
                                     <option>Bangaore</option>
                                     <option>Bangalore Rural</option>
                                 </select></td>
                             <td>Date of issue:<p6 style="color:red">*</p6><input type='date' name="rdateissue" required></td>
                             <td>Valid Upto<input type='date' name="rvaildupto" required></td>
                         </tr>
                     </table>
                     <br>
                     <input type="submit" value="Save" name="save" onclick="confir()">&nbsp;&nbsp;&nbsp;&nbsp;
                     <button><a href="step2.php">Next</a></button>
                     <br> <br>



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



                     <div class="h2">
                         <h3 style="color: #3b7687">abc</h3>
                     </div> <br>
                 </center>
             </div>
         </div>
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
    $idtype=$_POST['ridtype'];
    $idno=$_POST['ridno'];
    $nation=$_POST['rnation'];
    $gender=$_POST['rgender'];
    $full=$_POST['rfull'];
    $father=$_POST['rfather'];
    $mother=$_POST['rmother'];
    $std=$_POST['rstd'];
    $dob=$_POST['rdob'];
    $age=$_POST['rage'];
    $domicile=$_POST['rdomicile'];
    $ph=$_POST['rph'];
    $married=$_POST['rmarried'];
    $cat=$_POST['rcat'];
    $subcat=$_POST['rsubcat'];
    $rdno=$_POST['rRdno']; 
    $placeissue=$_POST['rplaceissue'];
    $dateissue=$_POST['rdateissue'];
    $vaildupto=$_POST['rvaildupto'];
    

$s="select * from step1";
 
$result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($result==true)
      
   {
    $reg="insert into   step1(name,idtype,idno,nation,gender,fullname,father,mother,std,dob,age,domicile,ph,married,cat,subcat,rdno,placeeissue,dateissue,validupto) values('$name','$idtype','$idno','$nation','$gender','$full','$father','$mother','$std','$dob','$age','$domicile','$ph','$married','$cat','  $subcat','$rdno','$placeissue','$dateissue','$vaildupto')";
    
    mysqli_query($con,$reg);
    
  echo"<script type='text/javascript'>
  function confir()
        {
            if(confirm('Do you want To Save?'))
                {
        alert('Saved Sucessfull');
                }else{
            window.location.href='profile.php';
                   
                }
        }
    </script>"; 
}else{
    echo"not  sucess";
}
}

     ?>
