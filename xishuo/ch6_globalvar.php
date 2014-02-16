<?php
$a = "hello";
function print_a() {
    global $a;
    $a = "phper";
}
print_a();
echo $a;
?>
