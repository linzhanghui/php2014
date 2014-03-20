<?php
	$url = 'http://www.baidu.com';
	$info = file_get_contents($url);
	preg_match('|<title>(.*?)<\/title>|i',$info,$m);
	echo $m[1];
?>
