<?php
class connect{
    public $localhost;
    public $user;
    public $pass;
    public $database;
        function __construct() {
            $this->localhost="localhost";
            $this->user="root";
            $this->pass="";
            $this->database="sqlfecht";
    }
    function conn() {
        $result= mysql_connect($this->localhost, $this->user, $this->pass);
        mysql_selectdb($this->database,$result)or die("error de conexion");
        
    }

}