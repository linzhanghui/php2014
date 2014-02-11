<html>
<head><meta charset="utf-8"><title>电子邮件格式表单验证</title></head>
<body>
<div style="height:500;width:800;margin:0 auto;background-color:yellow;">
<form action="another.php" method="post">
    <h5>请输入电子邮件地址</h5>
    <input type="text" name="email"></br>
    <input type="button" value="提交">
    

<?php
if($_POST['email']){
    echo '输入了电邮';
}else {
    echo 'none';
}
?>
</div>
</body>
</html>
