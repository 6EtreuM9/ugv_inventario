<?php
//.........Conexion a la data base
//include 'connect/db.php';
//.........Validacion de los datos
//........ Insertar datos
echo "El nombre del objeto es: ".$_POST['id_objname']."<br>";
echo "El numero de serie es: ".$_POST['id_objns']."<br>";
echo "La descripcion es: ".$_POST['id_subject']."<br>";
echo "Pertenece al departamento: ".$_POST['id_objdepartament'];

/*$sql = "INSERT INTO inventory (object_name, object_ns, object_description, object_id_department)
VALUES ($objname, $objns, $objdesc, $objdep)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

?>