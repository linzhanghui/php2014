/*
function mailcheck($email){
    //1.检查@符号，然后看其长度是否正确
    if(!ereg("^[^@]{1,64}@[^@]",$email)){
        return false;
    }
    $email_array = explode("@",$email);
    $local_array = explode(",",$email_array[0]);

    for($i=0;$i < sizeof($local_array);i++) {
    
    }
}
*/

//简单正则
//  ^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$
//
<?php
function isEmail($email){
    if(preg_match("/^[0-9a-zA-Z]+@(([0-9a-zA-Z]+[.])+[a-z]{2,4}$/i",$email)){
        return '邮件通过认证';
    } else {
        return '邮件未通过认证';
    }
}
?>
