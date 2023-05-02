<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="/Admission_Portal/css/style.css">
    <link rel="stylesheet" href="/Admission_Portal/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <img style="padding:20px 10px 10px 20px" width="120" height="120" src="/Admission_portal/images/images-1.jpeg">
    <br>
    <center>
        <h2 style="font-family: Vineta BT">Government Science College<br>(Autonomus) Bangalore.</h2>
    <h3 style="font-family: algerian"><u>Admission Portal</u></h3><br>
        <div class="h2">
            <h3 style="color: #3b7687">GSCB</h3>
        </div><br>
    </center>
    <button style="border-radius:10px;background-color:red; margin-left:1200px"><a href="/Admission_Portal/logout.php">Log Out</a></button>
</head>
<center>



    <?php
session_start();
    error_reporting(E_ERROR | E_PARSE);
if($_SESSION['adminname']==true)                                    //checks user's session is same or not
{
      
     $name=$_SESSION['adminname'];
    echo " <h2 align='center'>Welcome: <p6 style='color:#cc6600'>$name</p6></h2>";

}else{
   header('location:/Admission_Portal/adminlogin.php');//after logout don't come back

}
?>



    <body style="background: linear-gradient(-45deg,#238bd52e,#199ce685,#199ce685)">
        <script src="js/script.js"></script>
        <form action="" method="post">
            
            <br>
            
            <h2><u>Application Status</u></h2>
            
            <!--status-->
            
            <p style="border:5px solid black; width:450px; height:150px; border-radius:20px">
                        <?php
                   
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
            $name=$_GET['name'];
                                

                        $query="select * from status where name='$name'";
                        $result = mysqli_query($con,$query);
                    
        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>
                    
                      <b style="color:orange;font-size:22px"><?php echo $rows['status']; ?></b><br>
            <b style="color:blue;font-size:18px"><?php echo $rows['message']; ?></b>
                        
                        
                        <?php
    }

                         ?>
        </p>   
            
                            <!-- step1 (profile) -->
            
            <?php
  
            error_reporting(E_ERROR | E_PARSE);
                        $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                    
        
                      $name=$_GET['name'];  // To get the name when admin clicks on view button of particular student in 'adminpage'
        $query="select * from step1 where name='$name'" ;
                              $result = mysqli_query($con,$query);
                    
           if($rows = mysqli_fetch_assoc($result))
            {
            ?>
            
            
            <h4><br>Student Name:<b><?php echo $rows['name'];?></b></h4>

            <h2>step1</h2>
            <table align="center" border="2px" style="width: 1000px;
    height: 40px">
                <tr style=" background-color: #6666ff">
                    <td colspan="2">
                        <h3>Proof details (Field with <p6 style="color:red">*</p6> are mandatory)</h3>
                    </td>
                </tr>
                <tr>
                    <td>Please Select ID type:<p6 style="color:red">*</p6><br>
                        <input type="text" value="<?php echo $rows['idtype']; ?>" readonly></td>
                    <td>Identity No.:<p6 style="color:red">*</p6>
                        <input type="number" name="ridno" readonly value="<?php echo $rows['idno']; ?>">
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
                    <td>Nationality:<p6 style="color:red">*</p6><br>
                        <input type="text" value="<?php echo $rows['nation']; ?>" readonly></td>
                    <td>Gender:<p6 style="color:red">*</p6><br>
                        <input type="text" readonly value="<?php echo $rows['gender']; ?>">

                    </td>



                    <td colspan="3">Full Name(in English as per SSLC/10th std or equivalent certificate)<p6 style="color:red">*</p6><br> <input type="text" value="   <?php echo $rows['name']; ?>" name="rfull">
                    </td>
                </tr>
                <tr>
                    <td>Father's Name as per SSLC/10th std or equivalent certificate<p6 style="color:red">*</p6><br> <input type="text" name="rfather" value="<?php echo $rows['father']; ?>" readonly></td>

                    <td colspan="4">Mother's Name<p6 style="color:red">*</p6> <br>
                        <input type="text" name="rmother" value="<?php echo $rows['mother']; ?>" readonly></td>

                </tr>

                <tr>
                    <td>Landline with STD Code:<br><input type="text" name="rstd" value="<?php echo $rows['std']; ?>" readonly>
                    </td>

                    <td>Date Of Birth:<p6 style="color:red">*</p6><br><input type="text" value="<?php echo $rows['dob']; ?>" readonly></td>
                    <td>Age:<p6 style="color:red">*</p6><br><input type="text" name="rage" value="<?php echo $rows['age']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Whether Domicile of karnataka?<p6 style="color:red">*</p6><br>
                        <input type="text" value="<?php echo $rows['domicile']; ?>" readonly>

                    <td>Are you Differently abled Person(PH)<p6 style="color:red">*</p6><br>
                        <input type="text" readonly value="<?php echo $rows['ph']; ?>">
                    </td>
                    <td>Are you Married?<p6 style="color:red">*</p6><br>
                        <input type="text" readonly value="<?php echo $rows['married']; ?>">
                    </td>
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
                        <input type="text" value="<?php echo $rows['cat']; ?>" readonly></td>
                    <td colspan="3">Sub Caste<p6 style="color:red">*</p6><br>
                        <input type="text" value="<?php echo $rows['subcat']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Certificate No(RD No)<p6 style="color:red">*</p6><br><input type="text" value="
                         <?php echo $rows['rdno']; ?>" readonly></td>
                    <td>Place of Issue:<p6 style="color:red">*</p6><br>
                        <input type="text" value="<?php echo $rows['placeeissue']; ?>" readonly></td>
                    <td>Date of issue:<p6 style="color:red">*</p6>
                        <input type="text" value="<?php echo $rows['dateissue']; ?>" readonly></td>
                    <td>Valid Upto<input type="text" value="<?php echo $rows['validupto']; ?>" readonly></td>
                </tr>
            </table>


            <?php
        }
                         ?>




            <br><br><br><br><br><br><br><br>


            <!-- step2 -->

            <h2>step2</h2>

            <?php

                        $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                    
                  $name=$_GET['name'];
                        $query="select * from step2 where name='$name' " ;
                        $result = mysqli_query($con,$query);
                    
  
        while($rows = mysqli_fetch_assoc($result))
            {
            ?>

            <table align="center" border="2px" style="width: 1000px;
    height: 40px">
                <tr style=" background-color:#6666ff">
                    <td colspan="3">
                        <h3>Permanent Adress (Field with <p6 style="color:red">*</p6> are mandatory)</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"> House Name:<input type="text" value="<?php echo $rows['HOUSENAME']; ?> " readonly><br>
                        Address:<p6 style="color:red">*</p6><br>
                        <textarea cols="50" rows="8" readonly>
                        <?php echo $rows['PERMANENTADDRESS']; ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        state / Union Territory:<input type="text" value=" <?php echo $rows['PERMANENTUNION']; ?>" readonly>

                    </td>
                    <td>
                        District:<input type="text" value=" <?php echo $rows['PERMANENTDISTRICT']; ?>" readonly>
                    </td>
                    <td>
                        Taluk:<input type="text" value=" <?php echo $rows['PERMANENTTALUK']; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Village/City:<input type="text" value=" <?php echo $rows['PERMANENTCITY']; ?>" readonly>
                    </td>
                    <td>PinCode:<input type="text" value=" <?php echo $rows['PERMANENTPIN']; ?>" readonly></td>
                </tr>
            </table>

            <center>

                <input type="checkbox" readonly name="chek" id="chek" onclick="copy()" disabled>Tick if you are residing at the Permanent adress?<br>
                <p6 style="color:red">College authority will Communoicate With Permanent Adress, So enter valid Adress For Communication</p6> <br>
            </center>


            <table align="center" border="2px" style="width: 1000px;
    height: 40px">
                <tr style=" background-color: #6666ff">
                    <td colspan="3">
                        <h3>Residentical Adress (Field with <p6 style="color:red">*</p6> are mandatory)</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"> Adress:<p6 style="color:red">*</p6><br>
                        <textarea cols="50" rows="8" readonly> <?php echo $rows['RESIDENTICALADDRESS']; ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        state / Union Territory:<input type="text" value=" <?php echo $rows['RESIDENTICALUNON']; ?>" readonly>
                    </td>
                    <td>
                        District:<input type="text" value=" <?php echo $rows['RESIDENTICALDISTRICT']; ?>" readonly>
                    </td>
                    <td>
                        Taluk:<input type="text" value=" <?php echo $rows['RESIDENTICALTALUK']; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Village/City:<input type="text" value=" <?php echo $rows['RESIDENTICALCITY']; ?>" readonly>
                    </td>
                    <td>PinCode:<input type="text" value=" <?php echo $rows['RESIDENTICALPIN']; ?>" readonly></td>
                </tr>
            </table>
            <?php
        }
                         ?>

            <br><br><br><br><br>



            <!-- STEP3 -->



            <h2>step3</h2>


            <table border="2px">
                <tr style="width: 1300px; line-height: 50px;  background-color: #0099ff">
                    <th></th>
                    <th>Sr.no</th>
                    <th>&nbsp;Qualification Type&nbsp;</th>
                    <th>&nbsp;Name of Institute&nbsp;</th>
                    <th>&nbsp;Subject&nbsp;</th>
                    <th>&nbsp;State&nbsp;</th>
                    <th>&nbsp;Board/University&nbsp;</th>
                    <th>&nbsp;Taluk&nbsp;</th>
                    <th>Course Duration</th>
                    <th>Date of Declaration of Result</th>
                    <th>Register/Roll Number</th>
                </tr>





                <?php
                    
                    
                   
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
                  
                          $name=$_GET['name'];
                        $query="select * from step3 where name='$name'";
                        $result = mysqli_query($con,$query);
                    
  
        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>


                <tr>
                    <td><button disabled>EDIT</button><!-- herf="pagename.extention(?)to pass id variable to delete particular table"-->
                        <button disabled>DELETE</button></td>
                    <td></td>
                    <td><?php echo $rows['QUALIFICATION']; ?></td><!-- names given in the table-->
                    <td><?php echo $rows['INSTITUTE']; ?></td>
                    <td><?php echo $rows['SUBJECT']; ?></td>
                    <td><?php echo $rows['STATE']; ?></td>
                    <td><?php echo $rows['BOARD']; ?></td>
                    <td><?php echo $rows['TALUK']; ?></td>
                    <td><?php echo $rows['COURSEDURATION']; ?></td>
                    <td><?php echo $rows['RESULTDATE']; ?></td>
                    <td><?php echo $rows['ROLLNO']; ?></td>
                </tr>
                <?php
    }

     ?>






                <br> <br> <br> <br>
            </table><br><br><br><br><br><br>




            <!-- step 4 -->


            <h2>step4</h2>
            <?php
                    
                    
                   
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
                  
                      $name=$_GET['name'];
                        $query="select * from step4 where name='$name'";
                        $result = mysqli_query($con,$query);
                    
  
        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>



            <table align="center" border="2px" style="width: 1000px;
   line-height: 50px">
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
                    <td>Course<br>
                        <input type="text" value="<?php echo $rows['COURSE']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Subject1
                        <input type="text" value="<?php echo $rows['SUB1']; ?>" readonly></td>
                    <td>Subject2
                        <input type="text" value="<?php echo $rows['SUB2']; ?>" readonly></td>
                    <td>Subject3
                        <input type="text" value="<?php echo $rows['SUB3']; ?>" readonly></td>
                </tr>
                <tr style="line-height: 20px">
                    <td colspan="5">
                        <h4>Select Language Subjects:</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        Lan I :<input type="text" value="<?php echo $rows['LAN1']; ?>" readonly>
                    </td>
                    <td>
                        Lan II:<input type="text" value="<?php echo $rows['LAN2']; ?>" readonly>
                    </td>
                </tr>

            </table>

            <?php
        }
      ?>



            <br><br><br><br><br><br>
            <br><br><br><br>
            <!-- step5 -->


            <h2>step5</h2>
            <?php
                    
                    
                   
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
                  
                      $name=$_GET['name'];
                        $query="select * from step5 where name='$name'";
                        $result = mysqli_query($con,$query);
                    
  
        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>


            <fieldset style=" border: 3px groove black; border-radius: 2px; margin-left:200px; margin-right:200px">
                <br>
                <p6 style="color:red">All Documents are Mandatory to Upload. So Upload all Documents.(If you have multiple documents please merge it into on PDF or Image)</p6>
                <br><br>
                <table align="center" border="1px" style="width: 900px;
    height: 280px">
                    <tr style=" background-color: #6666ff">
                        <td colspan="5">
                            <h3>Document To Upload (Field with <p6 style="color:red">*</p6> are mandatory)</h3>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5"><br></td>
                    </tr>
                    <tr style=" background-color: blue">
                        <th>Sr.No.</th>
                        <th>Details of Certificate</th>
                        <th>Certificate Number</th>
                        <th>Uploads</th>
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;View&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    </tr>





                    <tr align="center">
                        <td>1.</td>
                        <td> SSLC Marks card</td>
                        <td>Certificate Number<br><input type="text" value="<?php echo $rows['SSLCNO']; ?>" readonly></td>
                        <td><input type="file" accept="application/pdf" disabled></td>

                        <td><br>
                                          <?php echo '<img src="data:image;base64,'.base64_encode($rows['SSLC']).' " style="width:40px; height:50px;">';?>
                                          <br>                                    
                            <a href="/Admission_Portal/images/uploaded%20files/view_uploaded/sslc.php?name=<?php echo $rows['name']; ?>">view</a>
                                </td>
                    </tr>

                    <tr align="center">
                        <td>2.</td>
                        <td> PU Marks card</td>
                        <td>Certificate Number<br><input type="text" value="<?php echo $rows['PUNO']; ?>" readonly></td>
                        <td><input type="file" accept="application/pdf" disabled></td>
                        <td>
                                    <br>
                                <?php echo '<img src="data:image;base64,'.base64_encode($rows['PU']).' " style="width:40px; height:50px;">';?>
                                    <br>                                    
                            <a href="/Admission_Portal/images/uploaded%20files/view_uploaded/pu.php?name=<?php echo $rows['name']; ?>">view</a>
                                </td>

                    </tr>
                    <tr align="center">
                        <td>3.</td>
                        <td>Income Certificate</td>
                        <td>Certificate Number<br><input type="text" value="<?php echo $rows['INCOMENO']; ?>" readonly></td>
                        <td><input type="file" accept="application/pdf" disabled></td>
                         <td><br>
                                <?php echo '<img src="data:photo;base64,'.base64_encode($rows['INCOME']).' " style="width:40px; height:50px;">';?>
                                    <br>                                    
                            <a href="/Admission_Portal/images/uploaded%20files/view_uploaded/income.php?name=<?php echo $rows['name']; ?>">view</a>
                                </td>

                    </tr>
                    <tr align="center">
                        <td>4.</td>
                        <td>Caste Certificate</td>
                        <td>Certificate Number<br><input type="text" value="<?php echo $rows['CASTENO']; ?>" readonly></td>
                        <td><input type="file" accept="application/pdf" disabled></td>
                         <td><br>
                                <?php echo '<img src="data:photo;base64,'.base64_encode($rows['CASTE']).' " style="width:30px; height:40px;">';?>
                                    <br>                                    
                            <a href="/Admission_Portal/images/uploaded%20files/view_uploaded/caste.php?name=<?php echo $rows['name']; ?>">view</a>
                                </td>

                    </tr>
                </table>

                <br><br>
            </fieldset>


            <?php
        }
                         ?>


            <br><br><br>
            
                
                <?php
                   
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                                
                $name=$_GET['name'];
                        $query="select * from student where name='$name'";
                        $result = mysqli_query($con,$query);
                    
  
        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>  
            
                <center>
                <button formaction="accept.php" formmethod="post"><a style="color: white" href="accept.php?name=<?php echo $rows['name']; ?>">ACCEPT</a></button>
                <button style="background-color: grey" formaction="accept.php" formmethod="post"><a style="color: white" href="reject.php?name=<?php echo $rows['name']; ?>">REJECT</a></button>
                </center>
            <?php
            }
            ?>
            <br>
            <style>
               
                button {

                    text-align: center;
                    width: 90px;
                    height: 35px;
                    background-color: #0066ff;
                    border: 2px solid black;
                    border-radius: 5px;
                    font-weight: bold;
                    font-size: 18px;
                    font-family: serif;
                    color: floralwhite;

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


            <div class="h2" class="h2">
                <h3 style="color: #3b7687">GSCB</h3>
            </div>
            <br><br>
        </form>

    </body>
</center>

</html>
