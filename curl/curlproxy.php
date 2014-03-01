<?php
//哪里错了？
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "www.facebook.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
//curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');  
//curl_setopt($ch,CURLOPT_PROXYTYPE,CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXY,'162.251.164.19');
curl_setopt($ch, CURLOPT_PROXYPORT,'7808');
$output = curl_exec($ch);
echo htmlspecialchars($output);
curl_close($ch);
//test
?>

