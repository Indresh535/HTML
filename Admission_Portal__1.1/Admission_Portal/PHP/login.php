<?php

  session_start();

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'database');

if(isset($_POST['OK']))
{
$name=$_POST['rname'];
$pass=$_POST['rpass'];

$s="select * from student where name='$name' && password='$pass'";
 $result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);
   
if($num==1)
   {
    $_session['rname']=$name;
     header('location:/Banking/main.php');
   } else{
      echo"<script type='text/javascript'>alert('Invalid Username or Password');</script>"; 
}
}
