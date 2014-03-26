<?php

header("Content-Type: text/html; charset=GBK");
include_once("consql.php");
$gid = (int)$_GET[id];

$sql = "select * from tmp_url where id='$gid'";
$q = mysql_query($sql);

$row = mysql_fetch_array($q);

echo $row[0].$row[1]."<br>";

//$con = file_get_contents($row[url]);
//$preg = "#<title>(.*)</title>#iUs";

//preg_match($preg,$con,$arr);

//print_r($arr);

$sql2="select * from tmp_url where id>'$gid' order by id asc limit 1";

$q2 =mysql_query($sql2);

$result = mysql_fetch_array($q2);

echo $result[0].$result[1]."<br>";

if ($result[0]){
echo "<script>location.href='neirong.php?id=".$result[0]."'</script>";
}


//echo zz("#<title>(.*)</title#iUs",$con);
//echo "<br>";
//echo zz("#<SOHUADCODE>(.*)<div style=\"display:none;\">#is",$con);

function zz($preg,$con,$num=1){

	preg_match($preg,$con,$arr);

	return $arr[$num];

}



?>
