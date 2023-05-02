<?php
session_start();
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
