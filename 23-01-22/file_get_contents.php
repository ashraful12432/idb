<?php
	$file = 'usere.txt';
	$data = file_get_contents($file);
	$loop = explode(' ', $data);
	echo "<pre>";
	print_r($loop);




 ?>