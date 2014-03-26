<?php
header("Content-Type: text/html; charset=GBK");


if($_GET[yid]<=60 && $_GET[yid]){

include_once("consql.php");

$con = file_get_contents("http://it.sohu.com/7/1002/17/column203661721_17".$_GET[yid].".shtml");



$preg = "/<a href='(.*)' target='_blank'>(.*)<\/a><span>/i";

preg_match_all($preg,$con,$arr);


foreach($arr[1] as $id=>$v){


	$sql = "INSERT INTO `tmp_url` (`id`, `title`, `url`) VALUES (NULL, '".$arr[2][$id]."', '".$v."')";

	mysql_query($sql);

}
	$_GET[yid]++;
	echo "正在采集列表...".$_GET[yid];


	echo "<script>location.href='liebiao.php?yid=".$_GET[yid]."'</script>";
}else {
	echo "采集结束";
}

//print_r($con);

?>
