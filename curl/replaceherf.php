<?php
	$content = "<a href=http://www.163.com>neteasy</a>";
//	preg_match_all('/<a[^>]*>[^<]*</a>/i',$content,$matches);

//	print_r($matches[0]);	

//	echo $content;
//	preg_replace('/<a([^>]*)([^<]*)<\/a>/','<font color="red">\\2</font>',$content);
	$content = preg_replace("/<a[^>]*>|<\/a>/","",$content);
	echo $content;
//	ereg_
?>

