<?php

//header("Content-Type: text/html; charset=utf-8");
	//$url = "http://it.sohu.com/20140318/n396803913.shtml";
	$url = "http://www.shfair.org.cn/shfair/shzhdu.asp?id=27639";
//	$url = "http://www.ip138.com";
//	$url = "http://www.163trade.com/news/show.php?itemid=379";
	$this_header = array("content-type: application/x-www-form-urlencoded;charset=UTF-8");
	$ch = curl_init($url);

//	curl_setopt($ch,CURLOPT_HTTPHEADER,$this_header);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

	$content = curl_exec($ch);
	
	$utfcon = mb_convert_encoding($content,"UTF-8","gb2312");
//	echo $content;
//	echo $utfcon;

	echo $title = zz("#<title>(.*)</title>#iUs",$utfcon);
	echo "<br>";
	echo $cone = zz("#<div align=\"center\">会展简介(.*)<div align=\"center\">开始日期#iUs",$utfcon);
//	echo $zhongwen = zz("#<div class=\"content\" id=\"article\">(.*)<script type=\"text/javascript\">#iUs",$content);

function zz($preg,$con,$num=1){

	preg_match($preg,$con,$arr);

	return $arr[$num];

}

	curl_close($ch);
?>
