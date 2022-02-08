<?php 
function prime(){
$x = 8;
if($x==0){
	return "you can,t input 0";
}
elseif ($x==1) {
	return "1 is not prime number";
	
}
elseif ($x==2) {
	return "2 is a prime number";
}
else{

	for($i=2; $i<$x; $i++){
		if ($x%$i==0) {
			return "$x in not prime number";
			
		}
	}
			return "$x is a prime number";
}
}

echo prime();
?>