<?php
	$title = "Replacement Canon BP-511 CAMCORDER Battery [Item ID:3-236-523]";
	if(eregi("(\[Item ID:)([0-9]+)-([0-9]+)-([0-9]+)(])",$title,$arr)){
		print_r($arr);
	}
?>
