<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="crud"; // Database name

try {
$conexion = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
// echo "<h1>Conectado</h1>";
}catch(Exception $ex){
echo $ex->getMessage();
}

if (isset($_GET['accion'])=="insertala") {
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$sentenciasql=$conexion->prepare("INSERT INTO teclados (nombre, precio) VALUES (:nombre, :precio)");
$sentenciasql->bindParam(':nombre', $nombre);
$sentenciasql->bindParam(':precio', $precio);
$sentenciasql->execute();
exit();

}

$sentenciasql=$conexion->prepare("SELECT * FROM teclados");
$sentenciasql->execute();
$listaTeclados=$sentenciasql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($listaTeclados);

?>