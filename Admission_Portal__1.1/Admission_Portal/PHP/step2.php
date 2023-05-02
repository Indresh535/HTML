<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'database');


if(isset($_POST['save']))
{
   $name=$_POST['rname'];
    $housename=$_POST['house'];
    $permanentaddress=$_POST['address1'];
    $permanentunion=$_POST['union1'];
    $permanentdistrict=$_POST['dist1'];
    $permanenttaluk=$_POST['taluk1'];
    $permanentcity=$_POST['city1'];
    $permanentpin=$_POST['pin1'];
    $residenticaladdress=$_POST['address2'];
    $residenticalunion=$_POST['union2'];
    $residenticaldistrict=$_POST['dist2'];
    $residenticaltaluk=$_POST['taluk2'];
    $residenticalcity=$_POST['city2'];
    $residenticalpin=$_POST['pin2'];

$s="select * from step2";
 
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($result==true)
      
   {
    $reg="insert into step2(name,HOUSENAME,PERMANENTADDRESS,PERMANENTUNION,PERMANENTDISTRICT,PERMANENTTALUK,PERMANENTCITY,PERMANENTPIN,RESIDENTICALADDRESS,RESIDENTICALUNON,RESIDENTICALDISTRICT,RESIDENTICALTALUK,RESIDENTICALCITY,RESIDENTICALPIN) values('$name','$housename','$permanentaddress','$permanentunion','$permanentdistrict','$permanenttaluk',' $permanentcity','$permanentpin',' $residenticaladdress','$residenticalunion','$residenticaldistrict','$residenticaltaluk',' $residenticalcity','$residenticalpin')";
    mysqli_query($con,$reg);
  echo" 
     <script type='text/javascript'>
    function confir()
        {
            if(confirm('Do you want To Save?'))
                {
        alert('Saved Sucessfull');
                }else{
            window.location.href='step2.php';
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
