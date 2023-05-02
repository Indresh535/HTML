<?php
session_start();
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
