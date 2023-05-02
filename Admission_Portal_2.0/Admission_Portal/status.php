
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

                <center>
                    <h4 style="color:green">Your Application Status</h4>

                    <?php
                   
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
   $name=$_SESSION['rname'];                 

                        $query="select * from status where name='$name'";
                        $result = mysqli_query($con,$query);
                    
  
        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>
                    <fieldset style=" border: 3px groove #3b7687; border-radius: 20px; width:600px">
                        <br>
                        <h3 style="color:orange"><b> <?php echo $rows['status']; ?> </b></h3>
                        <br>
                        <h4 style="color:brown"><?php echo $rows['message']; ?> </h4> <br>
                    </fieldset>



                    <?php
        }
                     ?>


                </center>
                <br> <br>
                <div class="h2">
                    <h3 style="color: #3b7687">abc</h3>
                </div>
                <br><br>
            </div>
        </div>
    </form>
</body>

</html>
