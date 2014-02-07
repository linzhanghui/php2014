<?php
    $pattern=
    $content="";

if(preg_match($pattern,$content)){
    echo "成功匹配，在第二个参数中包含有效的HTML链接标签字符串";
}else {
    echo "在第二个参数的字符串中搜索不到有效的HTML链接标签";
}

?>
