<?php
require 'connect.php';
require 'user.php';
require 'classdatabase.php';



$objcon=new connect();
$objuser=new menup();
$objcon->conn();


$objuser->menup();