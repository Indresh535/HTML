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
    <script src="js/script.js"></script>

    <form action="admin%20login.php" method="post">
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




                <br><br><br><br><br><br><br><br><br><br>


                <!-- Display Data in Database -->
                <center>


                    <table align="center" border="1px" style="width: 600px; line-height: 40px;">
                        <tr>
                            <th colspan="5">
                                <h2>Student Record</h2>
                            </th>
                        </tr>
                        <tr style=" background-color: #6666ff">
                            <th> ID </th>
                            <th>name</th>
                            <th>phone no</th>
                            <th>email id</th>
                        </tr>


                        <?php
                   error_reporting(E_ERROR | E_PARSE);
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
   $name=$_SESSION['rname'];                 

                        $query="select * from student where name='$name'";
                        $result = mysqli_query($con,$query);
                    
  
        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>


                        <tr>
                            <td><?php echo $rows['ID']; ?></td><!-- names given in the table-->
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['phno']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
                        </tr>
                        <table align="right" border="2px" style="margin-right:200px; margin-top:-120px;">
                            <tr>
                                <td><?php echo '<img src="data:photo;base64,'.base64_encode($rows['photo']).'" style="width:100px; height:100px;">';?></td>
                            </tr>
                        </table>
                        <?php
    }

     ?>


                    </table>

                    <br> <br>
                    <div class="h2">
                        <h3 style="color: #3b7687">abc</h3>
                    </div>
                    <br><br>

                </center>
            </div>
        </div>
    </form>
</body>

</html>
