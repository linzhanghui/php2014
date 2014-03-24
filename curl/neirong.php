<?php

header("Content-Type: text/html; charset=GBK");


$con = file_get_contents("http://it.sohu.com/20140304/n396033871.shtml");


echo zz("#<title>(.*)</title#iUs",$con);

function zz($preg,$con,$arr){

	preg_match($preg,$con,$arr);

	return $arr[];

}

?>
