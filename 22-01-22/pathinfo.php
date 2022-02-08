<?php 
$filepath = "../19-01-22/mytextfile.txt";

 $data = pathinfo($filepath); //realpath() other fumction
 echo "<pre>";
print_r($data);
?>