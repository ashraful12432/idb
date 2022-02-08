<?php

	$line = "my name is khan

	and he isb the 
	complate herro";
	//echo preg_match('/is/', $line,$x);
	preg_match_all('/\bis\b/', $line, $x);
	print_r($x);

?>