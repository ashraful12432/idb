<?php
if (isset($_POST["num"])){

	$p =$_POST["num"];
if ($p%2==0){
    echo $p."is a even number";
}
else{
    echo $p."is a odd number";
}


}

?>
<form method="post" action="">
	<input type="text" name="num">
	<input type="submit" name="submit" value="submit">
</form>
