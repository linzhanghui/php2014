<?php
//$_POST['email'] = str_replace("@","[at]",$_POST['email']);
function emailreplace($String) {
    $String = str_replace("@","[at]",$String);
    return $String;
}
?>


<html>
    <head><title>title</title></head>
    <body>
        <form name="form" action="" method="post">
            <input type="text" name="email"/>
            <input type="submit"/>
        </form>
        <?php
//echo $_POST['email'];
//echo $_POST['email'] = str_replace("@","[at]",$_POST['email']);
    echo emailreplace($_POST['email']);
    ?>
    </body>
</html>
