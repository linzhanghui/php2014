<html>
    <head><meta charset="utf-8"><title>网络留言板</title></head>
    <body>
        <?php
$filename="text_data.txt";

if(isset($_POST["sub"])){
    $message=$_POST["username"]."||".$_POST["title"]."||".$_POST["mess"]."<|>";
    writeMessage($filename,$message);
}

if(file_exists($filename))
    readMessage($filename);

function writeMessage($filename,$message) {
    $fp = fopen($filename, "a");
    if(flock($fp,LOCK_EX)){
        fwrite($fp,$message);
        flock($fp,LOCK_UN);
    } else {
        echo "不能锁定文件";
    }
    fclose($fp);
}
function readMessage($filename) {
    $fp = fopen($filename,"r");
}
?>

        <form action="" method="post">
            用户名：<input type="text" size=10 name="username"><br>
            标&nbsp;&nbsp;题：<input type="text" size=30 name="title"><br>
            <textarea name="mess" row=4 cols=38>请在这里输入留言信息!</textarea>
            <input type="submit" name="sub" value="留言">
        </form>
    </body>
</html>