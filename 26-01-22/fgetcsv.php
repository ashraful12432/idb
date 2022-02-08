<?php
	// $file= "list.txt";
	// $fh = fopen($file, 'r');
	// while ( list($name,$email,$phpne)= fgetcsv($fh,2048,',')) {
	//  	echo $name.$email.$phpne."<br>";
	//  }

?>
<?php
$file= "list.txt";
	$fh = fopen($file, 'r');
	while ( $data= fgetcsv($fh,2048,',')) {
	 	for($i=0;$i<count($data);$i++){
	 		echo $data[$i];
	 		echo "|";
	 	}
	 	echo "<hr>";
	 }
?>