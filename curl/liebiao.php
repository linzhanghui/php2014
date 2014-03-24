<?php


$con = file_get_contents("http://it.sohu.com/7/1002/17/column203661721_1746.shtml");



//$preg = "#<h1>·<a href='(.*)' target='_blank'>(.*)</a><span>#iUs";
//$preg = "#<title>(.*)</title>#iUs";
//$preg = "#<h1>·<a href='(.*)' target='_blank'>一名90后眼中的游戏世界</a><span>#iUs";
$preg ="#<h1>(.*)</h1>#iUs";

//$preg = "!<h1>·<a href='(.*)' target='_blank'>(.*)</a><span>!iUs";
preg_match_all($preg,$con,$arr);
print_r($arr);


//print_r($con);

?>
