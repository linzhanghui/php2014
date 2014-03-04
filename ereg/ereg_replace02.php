<?php
function replace02($string){
    $num = '4';
    return ereg_replace('four',$num,$string);
}
echo replace02("This string has four words");
?>
