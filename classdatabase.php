<?php
class database {
    
    public $result;
        function __construct() {}
        
            function insert($query){
                mysql_query($query);
            }
            function delete($query) {
                mysql_query($query);
            }
            function update($query) {
                mysql_query($query);
            }
            function select($query) {
                return $this->result= mysql_query($query);
            }

}