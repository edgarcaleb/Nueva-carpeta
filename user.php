<?php
class user {
    public $obj; 
        function __construct() {
            $this->obj=new database();
    }
    public function menup() {
        $quey="INSERT INTO `menup` VALUES ('".$_POST["textfield"]."','".$_POST["textfield2"]."','".$_POST["textfield3"]."')";
        $this->obj->insert($quey);
    }

}