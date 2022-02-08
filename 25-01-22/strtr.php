<?php
	$tags = array ('<b>'=>'<strong>','</b>'=>'</strong>');
	$content = " <b>replace the blod string</b>";
	echo strtr($content,$tags);

?>