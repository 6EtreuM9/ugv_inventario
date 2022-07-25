<?php
/*.........Conexion a la data base
include '/connect/db.php';

//........ Insertar datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "Estos son los datos registrados <br>"
echo "El nombre del objeto es: ".$_POST['objname']."<br>";
echo "El numero de serie es: ".$_POST['objns']."<br>";
echo "La descripcion es: ".$_POST['subject']."<br>";
echo "Pertenece al departamento: ".$_POST['objdepartament']; 


$sql = "INSERT INTO inventory (object_name, object_ns, object_description, object_id_department)
VALUES ("$_POST['objname'], $_POST['objns'], $_POST['objdesc'], $_POST['objdep']")";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>

*/