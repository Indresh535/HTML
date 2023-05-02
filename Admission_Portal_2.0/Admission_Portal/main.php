<!DOCTYPE html>
<html lang="en">



<?php
    include 'design1.php';
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
