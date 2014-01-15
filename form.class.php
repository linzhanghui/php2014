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

}
