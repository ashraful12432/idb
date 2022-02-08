<?php
$file ="myfile.txt";
$sh =fopen($file, 'a+');
echo file_get_contents($file);
fwrite($sh, "\n hi im asraful");
?>