<?php
header("Content-Type: text/html; charset=GBK");
if($_GET[yid]<=60){

include_once("consql.php");

$con = file_get_contents("http://it.sohu.com/7/1002/17/column203661721_17".$_GET[yid].".shtml");
//$con .= file_get_contents("http://it.sohu.com/7/1002/17/column203661721_1747.shtml");
//$con .= file_get_contents("http://it.sohu.com/7/1002/17/column203661721_1748.shtml");
//$con .= file_get_contents("http://it.sohu.com/7/1002/17/column203661721_1749.shtml");



//$preg = "#<h1>·<a href='(.*)' target='_blank'>(.*)</a><span>#iUs";
//$preg = "#<title>(.*)</title>#iUs";
//$preg = "#<a href='(.*)' target='_blank'>一名90后眼中的游戏世界</a><span>#iUs";
$preg = "/<a href='(.*)' target='_blank'>(.*)<\/a><span>/i";
//$preg ="#<h1>(.*)</h1>#iUs";

//$preg = "!<h1>·<a href='(.*)' target='_blank'>(.*)</a><span>!iUs";
preg_match_all($preg,$con,$arr);

//print_r($arr);

foreach($arr[1] as $id=>$v){
//	echo $v."<br>".$arr[2];
//	echo "<a href=neirong.php?url=".$v.">".$arr[2][$id]."</a><br>";
//	echo $v." ".$arr[2][$id]."<br>";


$sql = "INSERT INTO `tmp_url` (`id`, `title`, `url`) VALUES (NULL, '".$arr[2][$id]."', '".$v."')";

mysql_query($sql);

}
	$_GET[yid]++;
	echo "<script>location.href='liebiao.php?yid=".$_GET[yid]."'</script>";
}

//print_r($con);

?>
