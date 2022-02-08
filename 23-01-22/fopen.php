<?php
	$file = "../19-01-22/mytextfile.txt";
	$fh = fopen($file,"r");
	// print_r($fh);
	// echo fgetc($fh);
	while (!feof($fh)) {
		echo fgetc($fh);
		}

?>