<?php
class Form {
    private $action;
    private $shape;

    function __construct($action="") {
        $this->action = $action;
        $this->shape = isset($_GET["action"]) ? $_GET["action"] : "rect";
    }    


}
