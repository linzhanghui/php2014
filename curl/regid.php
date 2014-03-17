<?php

	$title = "Replacement Canon BP-511 CAMCORDER Battery [Item ID:3-236-523]";
	if(eregi("(\[Item ID:)([0-9]+)-([0-9]+)-([0-9]+)(])",$title,$arr)){
		print_r($arr);
	}
	
	echo "</br>";
	echo "</br>";


	$date = "04.30.1973";
	list($month, $day, $year) = split('[/.-]',$date);
	echo "Month:$month; Day:$day; Year:$year<br />\n";

	if(preg_match("/\sweb\w/i","PHP is the website scripting language of  choice.")){
		print "A match was found.";
	} else {
		print "A match was not found.";
	}

?>
