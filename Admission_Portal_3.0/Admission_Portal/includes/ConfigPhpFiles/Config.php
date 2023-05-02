<?php
session_start();
$con=mysqli_connect('localhost','root','');    //mysqli_connect('host_name','username','password');
mysqli_select_db($con,'admission_portal_database');          //mysqli_select_db($con,'database_name');
?>
