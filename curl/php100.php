<?php
$login_url= "http://bbs.php100.com/login.php";
$ch = curl_init($login_url);



curl_exec($ch);
curl_close($ch);

?>
