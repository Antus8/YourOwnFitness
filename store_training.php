<?php 
require "conn.php";
require "dbclass.php";
$db = new DB_functions();
if (isset($_SESSION)) echo $_SESSION['email'];
$nome = "Ciccio";
$cognome= "Ciccio1";
$email = "Ciccio@gmail.com";
$telefono = "320";
$password = "prova";
$freq_all = 4;
$obiettivo = "Smazzare";
$sesso = "M";

$user = $db->storeUser($email, $password, $nome, $cognome, $sesso, $telefono, $obiettivo, $freq_all, $conn);
if(mysqli_num_rows($user) > 0){
		return "1";
		}
		else{
			return "0";
		}
?>