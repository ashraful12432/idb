<?php
// $x = 5;
function factorial($n){
	if($n==0){
		return 1;
	}
	 return $n*factorial($n-1);
}
// echo factorial($x);
?>
<?php 
if (isset($_POST["aj"])){

	$p =$_POST["aj"];

	$r=factorial($p);

	echo "the factorial number is $p=$r";

}

?>
<form method="post">
	<input type="text" name="aj">
	<input type="button" name="submit" value="submit">
</form>