<?php

$curlpost = "user=admin&pass=pass";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/php2014/curl/login.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER ,0);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$curlpost);

$data = curl_exec($ch);

curl_close($ch);

?>
