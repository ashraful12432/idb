<?php
	$drive = "C:/";
	$byte = diskfreespace($drive);
	$kb= $byte/1024;
	$mb= $kb/1024;
	$gb= $mb/1024;
	echo $gb;

 ?>