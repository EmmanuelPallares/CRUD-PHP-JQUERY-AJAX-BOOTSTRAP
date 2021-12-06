<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="crud"; // Database name

try {
$conexion = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
echo "<h1>Conectado</h1>";
}catch(Exception $ex){
echo $ex->getMessage();
}