<?php
$file = fopen("http://www.example.com/","r") or die("打开远程文件失败");    
while(!feof($file)){
    $line = fgets($file,1024);
    if(preg_match("/<title>(.*)<\/title>/",$line,$out)){
        $title = $out[1];
        break;
    }    
}
fclose($file);
echo $title;
?>
