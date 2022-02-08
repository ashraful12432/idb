<?php  

$days = array("sunday","monday","tuesday","wednesday","thursday","friday","saturday");
for ($i=0; $i <count($days) ; $i++) { 
	if ($days[$i]=="friday"){
		continue;
	}
	echo "today is ".$days[$i]."<br>";
}

?>