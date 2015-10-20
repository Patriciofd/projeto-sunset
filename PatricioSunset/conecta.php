<?php
$host = "localhost"; //IP do Host (ou nome)
$username = "root"; //Usuario do Banco de Dados
$password = "root"; // Senha do Banco de Dados
$database = "sunset"; // Database a ser usado
$connect = mysql_connect($host, $username, $password) or die (mysql_error());
mysql_select_db($database, $connect);
?>
