<?php 
require "conn.php";
require "dbclass.php";
$db = new DB_functions();
echo $_POST['ciao'].$_POST['come_stai'];
?>