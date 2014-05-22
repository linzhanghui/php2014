<?php

$dir = ".";
list_file($dir);

function list_file($dir){
	$list = scandir($dir);
	foreach($list as $file){
		$file_location = $dir."/".$file;
		if(is_dir($file_location)&&$file!="."&&$file!=".."){
			echo "--------------sign in $file_location-----------";
			list_file($file_location);
		}
		
		echo "<br/>";
	}
}


?>
