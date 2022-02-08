<?php 

	echo "<pre>";
print_r($_POST);

	echo "<pre>";
print_r($_FILES);

$name = $_FILES["asraf"]['name'];
echo "<br>";
$temp = $_FILES["asraf"]['tmp_name'];
 move_uploaded_file($temp, 'uplod/'.$name);
?>