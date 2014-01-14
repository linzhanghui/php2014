<?php
header("Content-Type: text/html; charset=UTF-8");
class Person {
    var $name;
    var $sex;
    var $age;

    function say() {
        echo "我的名字:".$this->name.", 性别: ".$this->sex."， 年龄：".$this->age."。 <br>";
    }

    function run() {
        echo $this->name ."在跑步<br>";
    }
}

$person1 = new Person();
$person2 = new Person();
$person3 = new Person();

$person1->name = "张三";
$person1->sex = "男";
$person1->age = 20;

$person1->say();
?>

