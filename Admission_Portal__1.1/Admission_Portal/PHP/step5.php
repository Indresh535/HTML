<?php
session_start();

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'database');

if(isset($_POST['upload']))
{
    $name=$_POST['rname'];
    
    $sslcname=rand(1000,10000)."_".$_FILES['sslc']['name'];         //file name with a random number so that similar don't get replaced
    $sslc=$_FILES['sslc']['tmp_name'];                              //temporary file name to store file and retrive the file
    move_uploaded_file($sslc,'images/uploaded files/'.$sslcname);    // Saving file in specified  locaion("images/uploaded files")folder
  
    $puname=rand(1000,10000)."_".$_FILES['pu']['name'];
    $pu=$_FILES['pu']['tmp_name'];
    move_uploaded_file($pu,'images/uploaded files/'.$puname); 
    
    $incomename=rand(1000,10000)."_".$_FILES['income']['name'];
    $income=$_FILES['income']['tmp_name'];
    move_uploaded_file($income,'images/uploaded files/'.$incomename); 
    
    $castename=rand(1000,10000)."_".$_FILES['caste']['name'];
    $caste=$_FILES['caste']['tmp_name'];
    move_uploaded_file($caste,'images/uploaded files/'.$castename); 
    
   
    $s="select * from step5";
 
$result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($result)
{
        $reg="insert into step5(name,SSLC,PU,INCOME,CASTE) values('$name','$sslc','$pu','$income','$caste')";
    mysqli_query($con,$reg);
  echo  "<script type='text/javascript'>
    function confir()
        {
            if(confirm('Do you want To Save?'))
                {
        alert('Saved Sucessfull');
                }else{
            window.location.href='step5.php';
                   
                }
        }
    </script>";  
}
}

     ?>









<?php
session_start();

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'database');                      

if(isset($_POST['upload']))
{
$sslc=addslashes(file_get_contents($_FILES['sslc']['tmp_name']));
   $pu=addslashes(file_get_contents($_FILES['pu']['tmp_name']));
$income=addslashes(file_get_contents($_FILES['income']['tmp_name']));
$caste=addslashes(file_get_contents($_FILES['caste']['tmp_name']));
    $s="select * from step5";
 
$result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($result)
{
        $reg="insert into step5(SSLC,PU,INCOME,CASTE) values('$sslc','$pu','$income','$caste')";
    mysqli_query($con,$reg);
  echo"<script type='text/javascript'>alert('Registered Sucessfull');</script>"; 
}
}   

     ?>









<?php
if(isset($_POST['upload']))
{
    $sslc=$_FILES['sslc'];      // Getting user uploaded files
    move_uploaded_file($sslc['tmp_name'],'images/uploaded files/'.$sslc['name']);     // Saving file in "images/uploaded files" folder
    
    $pu=$_FILES['pu'];
    move_uploaded_file($pu['tmp_name'],'images/uploaded files/'.$pu['name']);    
    
    $income=$_FILES['income'];
    move_uploaded_file($income['tmp_name'],'images/uploaded files/'.$income['name']);    
    
    $caste=$_FILES['caste'];
    move_uploaded_file($caste['tmp_name'],'images/uploaded files/'.$caste['name']);    
}
?>




<?php                                                                       // Displaying all Uploaded files
$files=scandir("images/uploaded files/");
for($a=2; $a < count($files); $a++)                                     
{                                                                        // Displaying links to download
    ?>
<p>
    <a href="images/uploaded%20files/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
</p>
<?php    
}
?>
