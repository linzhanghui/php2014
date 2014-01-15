<?php
class Form {
    private $action;
    private $shape;

    function __construct($action="") {
        $this->action = $action;
        $this->shape = isset($_GET["action"]) ? $_GET["action"] : "rect";
    }    
    
    function __tostring() {
        $form='<form action="'.$this->action.'?action='.$this->shape.'"method="post">';
        
    }

    private function getRect() {
        $input ='<b>请输入 | 矩形 | 的宽度和高度：</b><p>';
        $input .= '宽度：<input type="text" name="width" value="'.$_POST["width"].'"><br>';
        $input .= '高度：<input type="text" name="height" value="'.$_POST["height"].'"><br>';
        return $input;
    }

    private function getTriangle() {
        $input = '<b>请输入 | 三角形的 三条边：</b><p>';
        $input .= '第一边：<input type="text" name="side1" value="'.$_POST["side1"].'"><br>';
        $input .= '第二边：<input type="text" name="side2" value="'.$_POST["side2"].'"><br>';
        $input .= '第三边：<input type="text" name="side3" value="'.$_POST["side3"].'"><br>';
        return $input;
    }




}
