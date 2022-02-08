
<?php
$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = 'may ${2},2022';
echo preg_replace($pattern, $replacement, $string);
?>