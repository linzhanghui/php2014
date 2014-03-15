<?php


//$con = file_get_contents("http://it.sohu.com/7/1002/17/column203661721_1746.shtml");


$con = "<h1>·<a href='http://it.sohu.com/20140304/n396034271.shtml' target='_blank'>猫伙呆：空气水能发电电池组</a><span>"

//$preg = "@<h1>·<a href='(*.)' target='_blank'>(*.)</a><span>(03/04 18:15)</span></h1>
//<p>@";

echo addslashes($con);


/*
$preg = "!<h1>·<a href='(.*)' target='_blank'>(.*)</a><span>!iUs";
preg_match_all($preg,$con,$arr,PREG_SET_ORDER);
print_r($arr);
*/

//print_r($con);
?>
