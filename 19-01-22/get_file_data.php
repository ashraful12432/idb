<?php
	$datas = file('mytextfile.txt');

	echo "<pre>";
	//print_r($datas);
	foreach ($datas as $data) {
		list($a) = explode("|", $data);
	}

echo "$a";
?>
