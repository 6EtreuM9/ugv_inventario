<?php 
session_start();
$validar = $_SESSION['status'];

if (!isset($validar)) {
  header('Location:/ugv_inventario/administrador/index.php');
}else{
  echo "Correcto";
}
?>