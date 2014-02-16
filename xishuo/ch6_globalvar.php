<?php
$a = "hello";
function print_a() {
    global $a;
    $a = "phper";
}
echo $a;
?>
