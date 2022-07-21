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
$nameErr = $nsErr = $descriptionErr = $departamentErr = "";
$name = $ns = $description = $departament = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["objname"])) {
        $nameErr = "Nombre requerido";
    } else {
        $name = test_input($_POST["objname"]);
    }

    if (empty($_POST["objns"])) {
        $nsErr = "Numero de serie requerido";
    } else {
        $ns = test_input($_POST["objns"]);
    }

    if (empty($_POST["objdesc"])) {
        $descriptionErr = "Descripcion requerida";
    } else {
        $description = test_input($_POST["objdesc"]);
    }

    if (empty($_POST["objdep"])) {
        $departamentErr = "Departamento requerido";
    } else {
        $departament = test_input($_POST["objdep"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

try{
    
    // Create prepared statement
    $sql = "INSERT INTO inventory (object_name, object_ns, object_description, object_id_department) VALUES (:objname, :objns, :objdesc, :objdep)";
    $stmt = $conexion->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':objname', $_REQUEST['objname']);
    $stmt->bindParam(':objns', $_REQUEST['objns']);
    $stmt->bindParam(':objdesc', $_REQUEST['objdesc']);
    $stmt->bindParam(':objdep', $_REQUEST['objdep']);
    
    // Execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
    unset($conexion);

?>
</div>
