<?php
	$content = "<a href=http://www.163.com>neteasy</a>";
	echo $content;
	ereg_replace('<a([^>]*)([^<]*)</a>','<font color="red">\\2</font>',$content);
	ereg_replace("<a [^>]*>|<\/a>","",$content);
	echo $content;
//	ereg_
?>

