<?php
	
	$prime = array(2,3,5,11,13,17,19,23,29,31,37,41,43,47);

	for ($i=0; $i <1000 ; $i++) { 
		$random = rand(1,50);

		if(in_array($random, $prime)){
			echo "{$random},this is the number we found form the prime list";
			break;
		}else{
			echo "{$random},is not a prime number<br>";
		}
	}


?>