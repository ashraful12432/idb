<?php
$car= array("tata","volvo","bmw","toyota","lemborgini","ferari");
?>
<table>
	<tr>
		<th>id</th>
		<th>name</th>
	</tr>
	<?php for ($i=0; $i < count($car) ; $i++) { ?>

		<tr>
			<td><?php echo $i+1; ?></td>
			<td><?php echo $car[$i]; ?></td>
		</tr>

	<?php } ?>



</table>