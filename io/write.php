<?php
$fileName="data.txt";
$handle = fopen($fileName,'wa') or die('打开文件失败');
for($row=0;$row<10;$row++)
    fwrite($handle,$row.":www.github.com");
echo "ok";
fclose($handle);
?>
