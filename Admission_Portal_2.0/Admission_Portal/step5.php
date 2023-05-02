

<?php
include 'design.php';
session_start();
if($_SESSION['rname']==true)                                    //checks user's session is same or not
{
      
     $name=$_SESSION['rname'];
 echo " <h2 align='center'>Welcome: <p6 style='color:#cc6600'>$name</p6></h2>";

}else{
   header('location:login.php');//after logout don't come back

}
?>

                    <h3 style="color:blue">Step5: Upload Documents</h3>

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
                    
                    <fieldset style=" border: 3px groove black; border-radius: 2px; margin-left:200px;margin-right:200px">
                        <br>
                        <p6 style="color:red; text-align:left;"><b>Note:</b><br>All Documents are Mandatory to Upload. So Upload all Documents.(If you have multiple documents please merge it into on Image).<br>
                            All the Upload images size should be less than 100kb.
                        </p6>
                        <br><br>
                        <table align="center" border="1px" style="width: 900px;
    height: 300px">
                            <tr style=" background-color: #6666ff">
                                <td colspan="5">
                                    <h3>Document To Upload (Field with <p6 style="color:red">*</p6> are mandatory)</h3>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                            </tr><br>
                            <tr style=" background-color: #6666ff">
                                <th>Sr.No.</th>
                                <th>Details of Certificate</th>
                                <th>Certificate Number</th>
                                <th>Uploads</th>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;View&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            </tr>

                    
                            <tr align="center">
                                <td>1.</td>
                                <td> SSLC Marks card<p6 style="color:red">*</p6>
                                </td>
                                <td>Certificate Number:<p6 style="color:red">*</p6><br><input type="text" placeholder="Register Number" name="sslcno" required></td>
                                <td><input type="file" accept="image/*" name="sslc" id="sslc" onchange="uploadCheck" required></td>

                                <td><br>
                                           
                     <?php
                            //to display  photo from database
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
   $name=$_SESSION['rname'];                 

                        $query="select * from step5 where name='$name'";
                        $result = mysqli_query($con,$query);
                        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>

                                    <?php echo '<img src="data:image;base64,'.base64_encode($rows['SSLC']).' " style="width:40px; height:50px;">';?>
                                    <br>
                                    <a href="/Admission_Portal/images/uploaded%20files/view_uploaded/sslc.php?name=<?php echo $rows['name']; ?>">view</a>
                                    

                                <?php
                        }
                                ?>



                                </td>
                            </tr>

                            <tr align="center">
                                <td>2.</td>
                                <td> PU Marks card<p6 style="color:red">*</p6>
                                </td>
                                <td>Certificate Number:<p6 style="color:red">*</p6><br><input type="text" placeholder="Register Number" name="puno" required></td>
                                <td><input type="file" accept="image/*" name="pu" id="pu" onchange="uploadCheck" required></td>
                                <td>
                                    <br>
                                    <?php
                            //to display  photo from database
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
   $name=$_SESSION['rname'];                 

                        $query="select * from step5 where name='$name'";
                        $result = mysqli_query($con,$query);
                        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>

                                    <?php echo '<img src="data:image;base64,'.base64_encode($rows['PU']).' " style="width:40px; height:50px;">';?>
                                    <br>
                                    <a href="/Admission_Portal/images/uploaded%20files/view_uploaded/pu.php?name=<?php echo $rows['name']; ?>">view</a>
                                    

                                <?php
                        }
                                ?>



                                </td>

                            </tr>
                            <tr align="center">
                                <td>3.</td>
                                <td>Income Certificate<p6 style="color:red">*</p6>
                                </td>
                                <td>Certificate Number:<p6 style="color:red">*</p6><br><input type="text" placeholder="RD.no." name="incomeno" required></td>
                                <td><input type="file" accept="image/*" name="income" id="income" onchange="uploadCheck" required></td>
                                <td><br>
                                    <?php
                            //to display  photo from database
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
   $name=$_SESSION['rname'];                 

                        $query="select * from step5 where name='$name'";
                        $result = mysqli_query($con,$query);
                        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>

                                    <?php echo '<img src="data:photo;base64,'.base64_encode($rows['INCOME']).' " style="width:40px; height:50px;">';?>
                                    <br>
                                    <a href="/Admission_Portal/images/uploaded%20files/view_uploaded/income.php?name=<?php echo $rows['name']; ?>">view</a>
                                    

                                <?php
                        }
                                ?>



                                </td>

                            </tr>
                            <tr align="center">
                                <td>4.</td>
                                <td>Caste Certificate<p6 style="color:red">*</p6>
                                </td>
                                <td>Certificate Number:<p6 style="color:red">*</p6><br><input type="text" placeholder="RD.no." name="casteno" required></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" accept="image/*" name="caste" id="caste" onchange="uploadCheck" required></td>
                                <td><br>
                                    <?php
                            //to display  photo from database
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
   $name=$_SESSION['rname'];                 

                        $query="select * from step5 where name='$name'";
                        $result = mysqli_query($con,$query);
                        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>

                                    <?php echo '<img src="data:photo;base64,'.base64_encode($rows['CASTE']).' " style="width:30px; height:40px;">';?>
                                    <br>
                                    <a href="/Admission_Portal/images/uploaded%20files/view_uploaded/caste.php?name=<?php echo $rows['name']; ?>">view</a>
                                    

                                <?php
                        }
                                ?>



                                </td>
                                </tr>


                            
                        </table><br>
                        <input type="submit" value="Upload" name="upload" onclick="confir()">

                        <br><br>
                    </fieldset>
                    <br>
                    <button>Submit</button>
                    <br><br>
                    <div class="h2">
                        <h3 style="color: #3b7687">abc</h3>
                    </div>
                    <br><br>
                </center>
            </div>
        </div>
        <script type="text/javascript">
            // To Limit the size of the image less than 100kb(102400bytes)
            var uploadCheck = document.getElementById("sslc");
            uploadCheck.onchange = function() {
                while (this.files[0].size > 102400) {
                    alert("Image Size should be less than 100kb!!");
                    this.value = "";
                }
            }
            var uploadCheck = document.getElementById("pu");
            uploadCheck.onchange = function() {
                while (this.files[0].size > 102400) {
                    alert("Image Size should be less than 100kb!!");
                    this.value = "";
                }
            }
            var uploadCheck = document.getElementById("income");
            uploadCheck.onchange = function() {
                while (this.files[0].size > 102400) {
                    alert("Image Size should be less than 100kb!!");
                    this.value = "";
                }
            }
            var uploadCheck = document.getElementById("caste");
            uploadCheck.onchange = function() {
                while (this.files[0].size > 102400) {
                    alert("Image Size should be less than 100kb!!");
                    this.value = "";
                }
            }

        </script>

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

        input[type="submit"]:hover {
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


</body>

</html>





<?php

error_reporting(E_ERROR | E_PARSE);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'database');

if(isset($_POST['upload']))
{
    $name=$_POST['rname'];
    $sslcno=$_POST['sslcno'];
    $puno=$_POST['puno'];
    $incomeno=$_POST['incomeno'];
    $casteno=$_POST['casteno'];
    
    /* for pdf application upload
    $sslcname=rand(1000,10000)."_".$_FILES['sslc']['name'];         //file name with a random number so that similar don't get replaced
    $sslc=$_FILES['sslc']['tmp_name'];                              //temporary file name to store file and retrive the file
    move_uploaded_file($sslc,'images/uploaded files/'.$sslcname);    // Saving file in specified  locaion("images/uploaded files")folder
  
    $puname=rand(1000,10000)."_".$_FILES['pu']['name'];
    $pu=$_FILES['pu']['tmp_name'];
    move_uploaded_file($pu,'images/uploaded files/'.$puname); 
    
    $incomename=rand(1000,10000)."_".$_FILES['income']['name'];
    $income=$_FILES['income']['tmp_name'];
    move_uploaded_file($income,'images/uploaded files/'.$incomename); 
    
    $castename=rand(1000,10000)."_".$_FILES['caste']['name'];
    $caste=$_FILES['caste']['tmp_name'];
    move_uploaded_file($caste,'images/uploaded files/'.$castename); 
    */
    $sslc=addslashes(file_get_contents($_FILES['sslc']['tmp_name']));
    move_uploaded_file($sslc,'images/uploaded files/');
  
    
    $pu=addslashes(file_get_contents($_FILES['pu']['tmp_name']));
    move_uploaded_file($pu,'images/uploaded files/'); 
    
   
    $income=addslashes(file_get_contents($_FILES['income']['tmp_name']));
    move_uploaded_file($income,'images/uploaded files/'); 

    $caste=addslashes(file_get_contents($_FILES['caste']['tmp_name']));
    move_uploaded_file($caste,'images/uploaded files/'); 

    
    
    $s="select * from step5";
 
$result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($result==true)
{
        $reg="insert into step5(name,SSlCNO,PUNO,INCOMENO,CASTENO,SSLC,PU,INCOME,CASTE) values('$name','$sslcno','$puno','$incomeno','$casteno','$sslc','$pu','$income','$caste')";
    mysqli_query($con,$reg);
  echo  "<script type='text/javascript'>
    function confir()
        {
            if(confirm('Do you want To Save?'))
                {
        alert('Saved Sucessfull');
                }else{
            window.location.href='step5.php';
                   
                }
        }
    </script>";  
}
}

     ?>
