<link rel="stylesheet" href="css/conctact.css">
<style>.error {color: #FF0000;}</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php

include 'connect/db.php';

$objnameErr = $objnsErr = $objdescErr = $objdepErr = "";
$objname = $objns = $objdesc = $objdep = "";

  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["objname"])) {
      $objnameErr = "Name is required";
    } else { if (!test_input($_POST["objname"])) {
      $objnameErr = "Texto no permitido";
      } else{ if ( strlen($_POST["objname"]) > 255 ) {
          $objnameErr = "255 caracteres permitidos";
        } else {
          $objname = $_POST["objname"];
        }        
      }      
    }

    if (empty($_POST["objns"])) {
      $objnsErr = "Email is required";
    } else {
      $objns = test_input($_POST["objns"]);
    }

    if (empty($_POST["objdesc"])) {
      $objdescErr = "Descripcion requerida";
    } else {
      $objdesc = test_input($_POST["objdesc"]);
    }

    if (empty($_POST["objdep"])) {
      $objdepErr = "Departamento requerido";
    } else {
      $objdep = test_input($_POST["objdep"]);
    }
  }
  
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
      /*$sql = "INSERT INTO inventory (object_name, object_ns, object_description, object_id_department)
      VALUES ('$objname', '$objns', '$objdesc', '$objdep')";
      
      if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }*/


?>

<div class="container">
    <form id="formInsetData" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <label for="objname">Nombre</label><span class="error">  * <?php echo $objnameErr;?></span>
        <input type="text" id="id_objname" name="objname" placeholder="Marca, Modelo, Color.." require>

        <label for="objns">Numero de Serie</label><span class="error">  * <?php echo $objnsErr;?></span>
        <input type="text" id="id_objns" name="objns" placeholder="Numero de Serie.." require>
        
        <label for="objdesc">Descripción</label><span class="error">  * <?php echo $objdescErr;?></span>
        <textarea id="id_subject" name="objdesc" placeholder="Write something.." style="height:200px" require></textarea>
      
        <label for="objdep">Departamento</label><span class="error">  * <?php echo $objdepErr;?></span>
        <select id="id_objdepartament" name="objdep" require>
            <option selected hidden value="">Departamentos</option>
            <option value="administracion">Administración</option>
            <option value="academico">Academico</option>
            <option value="direccion">Dirección</option>
            <option value="planeacion">Planeación</option>
        </select>

        <input type="submit" name="submit" value="Submit">

    </form>
    <div id="respuesta"></div>
</div>

<?php
echo "nombre:".$objname."<br>";
echo "ns:".$objns."<br>";
echo "description:".$objdesc."<br>";
echo "dependencia:".$objdep;
?>
