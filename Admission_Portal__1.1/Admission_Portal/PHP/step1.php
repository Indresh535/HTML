<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'database');


if(isset($_POST['save']))
{
    $name=$_POST['rname'];
    $idtype=$_POST['ridtype'];
    $idno=$_POST['ridno'];
    $nation=$_POST['rnation'];
    $gender=$_POST['rgender'];
    $full=$_POST['rfull'];
    $father=$_POST['rfather'];
    $mother=$_POST['rmother'];
    $std=$_POST['rstd'];
    $dob=$_POST['rdob'];
    $age=$_POST['rage'];
    $domicile=$_POST['rdomicile'];
    $ph=$_POST['rph'];
    $married=$_POST['rmarried'];
    $cat=$_POST['rcat'];
    $subcat=$_POST['rsubcat'];
    $rdno=$_POST['rRdno']; 
    $placeissue=$_POST['rplaceissue'];
    $dateissue=$_POST['rdateissue'];
    $vaildupto=$_POST['rvaildupto'];
    

$s="select * from step1";
 
$result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($result==true)
      
   {
    $reg="insert into   step1(name,idtype,idno,nation,gender,fullname,father,mother,std,dob,age,domicile,ph,married,cat,subcat,rdno,placeeissue,dateissue,validupto) values('$name','$idtype','$idno','$nation','$gender','$full','$father','$mother','$std','$dob','$age','$domicile','$ph','$married','$cat','  $subcat','$rdno','$placeissue','$dateissue','$vaildupto')";
    
    mysqli_query($con,$reg);
    
  echo"<script type='text/javascript'>
  function confir()
        {
            if(confirm('Do you want To Save?'))
                {
        alert('Saved Sucessfull');
                }else{
            window.location.href='profile.php';
                   
                }
        }
    </script>"; 
}else{
    echo"not  sucess";
}
}

     ?>
