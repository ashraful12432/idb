<?php
	$file= "../19-01-22/mytextfile.txt";

	ini_set('date.timezone','asia/dhaka');

	$timestamp = filemtime($file);
	echo date('h:m:s', $timestamp);


?>