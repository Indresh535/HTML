<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="/Admission_Portal/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <img style="padding:20px 10px 10px 20px" width="120" height="120" src="/Admission_portal/images/images-1.jpeg">
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
if($_SESSION['adminname']==true)                                    //checks user's session is same or not
{
      
     $name=$_SESSION['adminname'];
    echo " <h2 align='center'>Welcome: <p6 style='color:#cc6600'>$name</p6><hr></h2>";

}else{
   header('location:adminlogin.php');//after logout don't come back

}
?>
    
    




<body style="background: linear-gradient(-45deg,#238bd52e,#199ce685,#199ce685)">
    <script src="js/script.js"></script>

    <form action="" method="post">
        <br><br><br>

        <center>
            <h2><u>Application Status</u></h2>
            <h4 style="color:red">Reject The Application</h4>
            <?php
  
                        $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                    
        
                      $name=$_GET['name'];  // To get the name when admin clicks on view button of particular student in 'adminpage'
        $query="select * from step1 where name='$name'" ;
                              $result = mysqli_query($con,$query);
                    
           if($rows = mysqli_fetch_assoc($result))
            {
            ?>
            
            <div style="border:4px solid black; height:300px;width:500px; border-radius:10px">
            <h4><br>Student Name:<input type="text" name="rname" value="<?php echo $rows['name'];?>" readonly /></h4><br>
            <textarea cols="50" rows="6" name="msg" placeholder="Write Message" required></textarea><br>
            <input type="text" name="status" value="<?php echo 'Application Rejected' ?>" readonly >
            </div><br>
            <input type="submit" name="submit" value="Submit" onclick="confir()">
        </center>
        <br> <br>
        <div class="h2">
            <h3 style="color: #3b7687">abc</h3>
        </div>
        <br><br>
                                <?php
                                        }

                                ?>
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

</body>

</html>







<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'database');


if(isset($_POST['submit']))
{
   $name=$_POST['rname'];
    $message=$_POST['msg'];
    $status=$_POST['status'];

    

$s="select * from status";
 
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($result==true)
      
   {
    $reg="insert into status(name,message,status) values('$name','$message','$status')";
    mysqli_query($con,$reg);
  echo" 
     <script type='text/javascript'>
    function confir()
        {
            if(confirm('Do you want To Save?'))
                {
        alert('Saved Sucessfull');
                }else{
            window.location.href='adminview.php';
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
