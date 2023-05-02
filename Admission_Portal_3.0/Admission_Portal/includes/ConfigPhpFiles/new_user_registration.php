<?php

error_reporting(E_ERROR | E_PARSE);
include 'Config.php';
if(isset($_POST['ok']))
{
$name=$_POST['rname'];
$pass=$_POST['rpass'];
$phno=$_POST['rphno'];
$email=$_POST['remail'];
$photo=addslashes(file_get_contents($_FILES['rphoto']['tmp_name']));

// $s="select * from 'table_name' where column_name='$value'";
$s="select * from student where name='$name'";
 
$result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($num ==1){
      echo"<script type='text/javascript'>alert('Username already Exist');
      window.location.href='../../new_user.php';
      </script>"; 
   } else{
      // insert into table_name(column_name1,column_name2,column_name3,column_name4) values('$value1','$value12','$value3','$value4')";
    $reg="insert into student(name,password,phno,email,photo) values('$name','$pass','$phno','$email','$photo')";
    mysqli_query($con,$reg);
  echo"<script type='text/javascript'>alert('Registered Sucessfull');
  window.location.href='../../login.php';
  </script>;"; 
  
}
}

     ?>