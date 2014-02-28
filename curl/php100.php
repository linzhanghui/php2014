<?php

//cookie成功登陆啦，抓百度有希望的~~~~~~
/*
$curlpost = "user=admin&pass=pass";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/php2014/curl/login.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER ,0);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$curlpost);

$data = curl_exec($ch);
 */


$cookie_file    =    tempnam('./tmp','cookie');
$login_url      =    "http://bbs.php100.com/login.php";
$post_fields    =    "step=2&pwuser=&pwpwd=&hideid=0";


$ch = curl_init($login_url);

curl_setopt($ch,CURLOPT_HEADER ,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER ,1);
curl_setopt($ch,CURLOPT_POST,1); 
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);



curl_exec($ch);
curl_close($ch);

//-------------------

$url="http://bbs.php100.com/userpay.php";
$ch = curl_init($url);

curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER ,0);
curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file);

$content = curl_exec($ch);
//preg_match("/金币：(.*)/",$content,$arr);
//echo $arr[1];    
curl_close($ch);


/*
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL,"http://www.baidu.com");


curl_setopt($curl, CURLOPT_RETURNTRANSFER,0); 

$data = curl_exec($curl);

curl_close($curl);

 */

?>
