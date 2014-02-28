<?php
$pic = 'http://www.baidu.com/img/bdlogo.gif';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $pic);
//curl_setopt($ch, CURLOPT_GET, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,10);
curl_setopt($ch, CURLOPT_TIMEOUT,30);

$imageData = curl_exec($ch);
curl_close($ch);

$tp = fopen('demo.gif','wb');
fwrite($tp, $imageData);
fclose($tp);

$str1 = md5_file('bdlogo.gif');
$str2 = md5_file('demo.gif');

var_dump($str1 == $str2);

?>
