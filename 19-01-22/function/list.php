<?php 
	// $colors = ["red","black","green","blue"];
	// list($cl1,$cl2,$cl3,$cl4) =$colors;    //convert arry to variavle form list function
	// echo $cl2;

?>
<?php 
	function info(){
		$data = array();
		$data[]="ashraful islam";
		$data[]="22";
		$data[]="mirpur";
		$data[]="spi";
		return $data;
	};
		list($a,$b,$c,$d) = info();

		echo "student name is $a <br>";
		echo "student age is $b <br>";
		echo "student addres is $c <br>";
		echo "student institute is $d <br>";


?>