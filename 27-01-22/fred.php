<?php 
	$file = "myfile.txt";
	$fh = fopen($file,'r');
	$size =  filesize($file);
	$output = fread($fh, $size);
	echo 	$output;  


?>