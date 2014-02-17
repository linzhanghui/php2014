<?php
$filename="data.txt";
$handle = fopen($filename,"r") or die("file can\'t open");
$contents = fread($handle,100);
fclose($handle);
echo $contents;
?>
