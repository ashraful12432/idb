<?php
session_start();
echo "your session identification is ". session_id();
$_SESSION['name'] = 'asraful';
$_SESSION['phone'] = '01792291998';
echo "<pre>";
print_r($_SESSION);

//session_destroy();
?>
<a href="about.php">about</a>;
