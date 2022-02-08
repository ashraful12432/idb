<?php

// $nu= 456;
// if ($_POST['guess']==$nu){
// 	echo "Congratulation";
// }
// else{
// 	echo "try again,,,";
// }

?>
<form action="" method="post">
	
<input type="text" name="guess"><br>
<button type="submit" >login</button>

</form>
<?php 

echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD']== 'POST' ){

	$nu= 100;
	if ($_POST['guess']==$nu){
		echo "Congratulation";
	}
	else{
		echo "try again,,,";
	}

}



?>