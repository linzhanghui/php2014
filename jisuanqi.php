<html>
    <head><meta charset="utf-8"><title>简单计算器</title></head>
    <body>
<?php
if(isset($_POST["num1"])&&isset($_POST["num2"])){
    if(empty($_POST["num1"])){
        echo "<font color='red'>第一个操作数不能为空</font><br>";
        unset($_POST["sub"]);
    }
    if(empty($_POST["num2"])){
        echo "<font color='red'>第二个操作苏不能为空</font><br>";
        unset($_POST["sub"]);
    }

    $oper = $_POST["oper"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

        if($oper=="/" || $oper=="%"){
            if($num2 == 0){
                echo "<font color='red'>0不能作为除数</font><br>";
                unset($_POST["sub"]);
            }
        }
}
?>


</body>
</html>
