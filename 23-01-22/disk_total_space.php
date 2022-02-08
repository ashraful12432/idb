<?php

$drive = "C:/";


	 $byte=disk_total_space($drive);
	$kb = $byte/1024;
	echo "$kb <br>";
	$mb = $kb/1024;
	echo "$mb <br>";
	$gb = $mb/1024;
	echo "$gb <br>";

?>