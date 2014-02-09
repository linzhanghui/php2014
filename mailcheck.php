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
