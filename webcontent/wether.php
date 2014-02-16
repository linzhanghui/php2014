<?php
$url          = "http://www.weather.com.cn/weather/101050101.shtml";
$page_content = file_get_contents($url);

echo $page_content;
?>
