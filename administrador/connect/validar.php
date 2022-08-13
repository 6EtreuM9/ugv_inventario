<?php
$name = $_POST['login_name'];
$pass = $_POST['login_pass'];
session_start();
$_SESSION['usuario']=$name;

include 'db.php';

if (isset($name) || isset($pass)) {
    $login = "SELECT * FROM user WHERE name_user = '$name' and pass_user = '$pass' ";
    $result = mysqli_query($conn, $login);
    $filas = mysqli_num_rows($result);
    if ($filas) {
        $_SESSION['status'] = "autorizado";
        print_r($_SESSION); 
        echo "<script> alert('Acceso Correcto');</script>";
        header('Location:/ugv_inventario/administrador/paginas/inicio.php');
        }else {
            echo "<script> alert('No se pudo actualizar');</script>";
            header('Location:/ugv_inventario/administrador/index.php');
        }
        mysqli_free_result($result);
        mysqli_close($conn);
}

?>