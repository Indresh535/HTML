
<?php
include 'design.php';
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

                    <h3 style="color:blue">Step3: Education details</h3>

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
                                <h3>Education Qualification: (Field with <p6 style="color:red">*</p6> are mandatory)</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>Qualification Type:<p6 style="color:red">*</p6><br>
                                <select name="qualification" required>
                                    <option></option>
                                    <option>SSLC</option>
                                    <option>PUC</option>
                                </select></td>
                            <td>Name of Institute:<p6 style="color:red">*</p6><br><input type="text" name="institute" required></td>
                            <td>Subject:<p6 style="color:red">*</p6>
                                <select name="sub" required>
                                    <option></option>
                                    <option>Sslc subjects</option>
                                    <option>PCMB</option>
                                    <option>PCME</option>
                                    <option>PCMCs</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>
                                State: <p6 style="color:red">*</p6>
                                <select name="state" required>
                                    <option></option>
                                    <option>Karnataka</option>
                                </select>
                            </td>
                            <td>
                                Board/University:<p6 style="color:red">*</p6>
                                <select name="board" required>
                                    <option></option>
                                    <option>State</option>
                                    <option>CBSE</option>
                                    <option>ICSE</option>
                                    <option>bangalore</option>
                                </select>
                            </td>
                            <td>
                                Taluk:<p6 style="color:red">*</p6>
                                <select name="taluk" required>
                                    <option></option>
                                    <option>Karnataka</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Course Duration:<p6 style="color:red">*</p6>
                                <select name="duration" required>
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </td>
                            <td colspan="2">Date of Decalaration of Result:<p6 style="color:red">*</p6>
                                <input type="date" name="resultdate" required></td>
                        </tr>
                        <tr>
                            <td>Register/Roll Number:<p6 style="color:red">*</p6>
                                <input type="text" name="rollno" required>
                            </td>

                    </table>

                    <br><input type="submit" value="Add" name="add" onclick="confir()">

                    <br> <br> <br> <br>


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
                   
                  
            $name=$_SESSION['rname']; 
                        $query="select * from step3 where name='$name'";
                        $result = mysqli_query($con,$query);
                    
  
        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>


                        <tr>
                            <td><button><a href="PHP/edit.php?ID=<?php echo $rows['ID']; ?>">EDIT</a></button><!-- herf="pagename.extention(?)to pass id variable to delete particular table"-->
                                <button><a href="PHP/delete.php?ID=<?php echo $rows['ID']; ?>">DELETE</a></button></td>
                            <td><?php echo $rows['ID']; ?></td>
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


                    </table><br><br>

                    <button><a href="step4.php">Next</a></button>
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


if(isset($_POST['add']))
{
    $name=$_POST['rname'];
    $qualificationtype=$_POST['qualification'];
    $institutename=$_POST['institute'];
    $subject=$_POST['sub'];
    $state=$_POST['state'];
    $board=$_POST['board'];
    $taluk=$_POST['taluk'];
    $courseduration=$_POST['duration'];
    $resultdate=$_POST['resultdate'];
    $rollno=$_POST['rollno'];
    
$s="select * from step3";
 
$result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($result)
      
   {
    $reg="insert into step3 (name,QUALIFICATION,INSTITUTE,SUBJECT,STATE,BOARD,TALUK,COURSEDURATION,RESULTDATE,ROLLNO)       values('$name','$qualificationtype','$institutename','$subject','$state','$board',
    '$taluk','$courseduration','$resultdate','$rollno')";
    mysqli_query($con,$reg);
  echo"<script type='text/javascript'>
    function confir()
        {
            if(confirm('Do you want To Save?'))
                {
        alert('Saved Sucessfull');
                }else{
            window.location.href='step3.php';
                   
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
