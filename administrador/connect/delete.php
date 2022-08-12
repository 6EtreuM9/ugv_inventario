<?php // sql to delete a record
include '../connect/db.php';
$url_inventario = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/administrador/paginas/inventario.php";

$id = $_POST['id_delet'];
if (isset($id)) {//........ Insertar datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $dlt = "DELETE FROM inventory WHERE $id";    
        if (mysqli_query($conn, $dlt)) {
            echo "<script> alert('Elemento eliminado'); window.location.assign('$url_inventario');</script>";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}

?>