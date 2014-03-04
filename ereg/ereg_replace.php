<?php
//Function ereg_replace() is deprecated in
function hellereg($string){
//    $string = "This is a test";
    echo str_replace(" is"," was", $string);
    echo ereg_replace("( )is", "\\1was", $string);
    echo ereg_replace("(( )is)", "\\2was", $string);
}
hellereg("This is a test");
?>
