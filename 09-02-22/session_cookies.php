<?php 
//$_COOKIE['day']= 'wednessday';
session_start();
$user = $_SESSION['usernsme']= 'asraful';
setcookie('ashraful','fehore',time()+30);
print_r($_COOKIE);


?>