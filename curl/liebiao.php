<?php
header("Content-Type: text/html; charset=GBK");
$con = file_get_contents("http://it.sohu.com/7/1002/17/column203661721_1746.shtml");
$con .= file_get_contents("http://it.sohu.com/7/1002/17/column203661721_1747.shtml");
$con .= file_get_contents("http://it.sohu.com/7/1002/17/column203661721_1748.shtml");
$con .= file_get_contents("http://it.sohu.com/7/1002/17/column203661721_1749.shtml");



//$preg = "#<h1>·<a href='(.*)' target='_blank'>(.*)</a><span>#iUs";
//$preg = "#<title>(.*)</title>#iUs";
//$preg = "#<a href='(.*)' target='_blank'>一名90后眼中的游戏世界</a><span>#iUs";
$preg = "/<a href='(.*)' target='_blank'>(.*)<\/a><span>/iUs";
//$preg ="#<h1>(.*)</h1>#iUs";

//$preg = "!<h1>·<a href='(.*)' target='_blank'>(.*)</a><span>!iUs";
preg_match_all($preg,$con,$arr);

//print_r($arr);

foreach($arr[1] as $id=>$v){
//	echo $v."<br>".$arr[2];
	echo $v." ".$arr[2][$id]."<br>";
}

//print_r($con);

?>
