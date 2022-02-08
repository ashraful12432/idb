<?php
	$file = "list.txt";
	$fh = fopen($file, 'r');
	while (!feof($fh)) {
		echo fgets($fh)."<br>";
	}


?>