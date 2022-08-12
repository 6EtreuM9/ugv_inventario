<?php
include '../connect/db.php';
$url_inventario = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/administrador/paginas/inventario.php";

$id = $_POST['idobj'];
$name = $_POST['objname'];
$ns = $_POST['objns'];
$desc = $_POST['objdesc'];
$dep = $_POST['objdep'];

if (isset($id)||isset($name)||isset($ns)||isset($desc)||isset($dep)){
    echo $id;
    $upd = "UPDATE inventory SET object_name = '$name', object_ns = '$ns', object_description = '$desc', object_id_department = '$dep'  WHERE object_id='$id' ";
        $result = mysqli_query($conn, $upd);
        if ($result) {
            echo "<br>".$result;
            echo "<br>".$url_inventario;
            echo "<script> alert('Elemento actualizado'); window.location.assign('$url_inventario');</script>";
        }else {
            echo "<script> alert('No se pudo actualizar'); windows.history.go(-1);</script>";
        }
}
?>



    