<?php
$filepath = "../19-01-22/mytextfile.txt";
 
 $data = filesize($filepath);
 echo $kb= round( $data/1024,4);



?>