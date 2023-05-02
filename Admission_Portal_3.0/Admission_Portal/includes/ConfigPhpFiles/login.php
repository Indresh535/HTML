

<?php

error_reporting(E_ERROR | E_PARSE);

include 'Config.php';

if(isset($_POST['OK']))
{
$name=$_POST['rname'];
$pass=$_POST['rpass'];

// $s="select * from 'table_name' where column_name='$value'";
$s="select * from student where name='$name' && password='$pass'";
 
    $result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);// to check all rows
   
if($num==1)
   {
   $_SESSION['rname']=$name;
    $name=$_POST['rname'];
     header('location:main.php');
   } else{
      echo"<script type='text/javascript'>alert('Invalid Username or Password');</script>"; 
}
}
?>