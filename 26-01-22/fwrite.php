<?php

$file ="myfile.txt";
// $sh =fopen($file, 'w');
$sh =fopen($file, 'a');
// fwrite($sh, "writr somthing");
fwrite($sh, "\n hi im asraful");

?>