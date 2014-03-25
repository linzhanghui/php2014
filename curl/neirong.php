<?php

header("Content-Type: text/html; charset=GBK");


$con = file_get_contents("http://it.sohu.com/20140304/n396033871.shtml");
//$preg = "#<title>(.*)</title>#iUs";

//preg_match($preg,$con,$arr);

//print_r($arr);


echo zz("#<title>(.*)</title#iUs",$con);
echo "<br>";
echo zz("/<div class=\"text clear\" id=\"contentText\”>(.*)<span class=\"editer\">/",$con);

function zz($preg,$con,$num=1){

	preg_match($preg,$con,$arr);

	return $arr[$num];

}



?>
