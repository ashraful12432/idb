<?php

ini_set("display_errors", "Off");
	try{
		$fh = fopen("conjutact.txt", "r");
		if (!$fh){
			throw new Exception("could not open the file");
			
		}
	}catch(Exception $x){
		echo $x->getMessage();
	}



?>