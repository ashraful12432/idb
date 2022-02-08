<?php 
$datas = file("usere.txt");
// print_r($file);?>
<table border="1">
	<tr>
		<th>name</th>
		<th>email</th>

	</tr>
	
<?php
foreach ($datas as $data) {
	list($name,$email) = explode(' ',$data );?>

	<tr>
		<td><?php echo $name ?></td>
		<td><?php echo $email ?></td>
	</tr>


<?php } ?>
</table>