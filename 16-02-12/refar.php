<?php
$value1 = "hello";
$value2 = &$value1;
$value2 = "good bye;";
echo $value1;



?>