
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
