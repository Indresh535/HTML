<?php
include'connection.php';
$id=$_GET['ID'];
$s="delete from step3 where ID=$id";
mysqli_query($con,$s);
header('location:/Admission_Portal/step3.php');
?>
