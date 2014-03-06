<?php


$con = file_get_contents("http://it.sohu.com/7/1002/17/column203661721_1746.shtml");
$preg = "/<h1>·<a href='(.*)' target='_blank'>(.*)<\/a><span>/iUs";
preg_match_all($preg,$con,$arr);
print_r($arr);


//print_r($con);
?>
