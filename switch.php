<?php
header("Content-Type:text/html; charset=UTF-8");
$week = date("D");

switch($week) {
    case "Mon";
    echo "星期一";
    break;

    case "Tue";
    echo "星期二";
    break;

    case "Wed";
    echo "星期三";
    break;

    case "Thu";
    echo "星期四";
    break;

    case "Fri";
    echo "星期五";
    break;

    case "Sat";
    echo "星期六";
    break;

    case "Sun";
    echo "星期日";
    break;
}
?>
