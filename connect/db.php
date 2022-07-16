<?php
$servidor = "localhost";
$usuario = "Rigel";
$contrasena = "1234";
//validacion de error nivel maquina
try {
    $conexion = new PDO("mysql:host=$servidor;dbname=ugv_database", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion Establecida";
} catch (PDOException $error) {
    echo "Conexion erronea".$error;
};
?>