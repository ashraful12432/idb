<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php
	if(isset($_GET['submit'])){
		$cat = $_GET["cats"];
		switch ($cat) {
			case 'news':
				echo "you thave selected news category";
				break;
				case 'weather':
				echo "you thave selected weather category";
				break;
				case 'sports':
				echo "you thave selected sports category";
				break;
			
			default:
				echo "select other one";
				break;
		}

		}
	?>


	<form action="">
		<select name="cats" id="">
			<option value="">select one</option>
			<option value="news">news</option>
			<option value="weather">weather</option>
			<option value="sports">sports</option>
		</select>
		<input type="submit" name="submit" value="Go">
	</form>
	
</body>
</html>