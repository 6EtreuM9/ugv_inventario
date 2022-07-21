<link rel="stylesheet" href="css/conctact.css">

<div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <label for="objname">Nombre</label>
        <input type="text" id="id_objname" name="objname" placeholder="Marca, Modelo, Color..">

        <label for="objns">Numero de Serie</label>
        <input type="text" id="id_objns" name="objns" placeholder="Numero de Serie..">

        <label for="objdesc">Descripción</label>
        <textarea id="id_subject" name="objdesc" placeholder="Write something.." style="height:200px"></textarea>
        
        <label for="objdep">Departamento</label>
        <select id="id_objdepartament" name="objdep">
            <option value="administracion">Administración</option>
            <option value="academico">Academico</option>
            <option value="direccion">Dirección</option>
            <option value="planeacion">Planeación</option>
        </select>        

        <input type="submit" value="Submit">

    </form>

<?php
//.........Conexion a la data base
include 'connect/db.php';
//.........Validacion de los datos
//........ Insertar datos
$sql = "INSERT INTO inventory (object_name, object_ns, object_description, object_id_department)
VALUES ('Teclado Vorago', '9089789012', 'Verde, Usb', 'administracion')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
</div>
