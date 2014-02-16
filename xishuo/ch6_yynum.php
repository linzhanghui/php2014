<?php
//引用方面的代码，有些问题；
    $num=10;
function demo($number) {
    $number = $number+20;
}
demo(&$num);
echo $num;
?>
