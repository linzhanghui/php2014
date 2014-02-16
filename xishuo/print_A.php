<?php
$A = "Hello";
function print_A(){
    $A = "php mysql !!";
    //global $A;
    echo $A;
}
echo $A;
print_A();
?>
