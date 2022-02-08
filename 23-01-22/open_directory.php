<?php
$dir = "../../pwad-50";
$directorysize = 0;
	if (is_dir($dir)){
		if($dh= opendir($dir)){
			while (($file = readdir($dh))!==false){
				echo $file."<br>";
				if (is_file($dir."/".$file))
					$directorysize+=filesize($dir."/".$file);
			}
			closedir($dh);
		}
	}
	//echo readdir(opendir($dir));
	echo "toal directorysize :$directorysize"

?>