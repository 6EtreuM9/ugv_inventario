<link rel="stylesheet" href="../css_admin/conctact.css"> 

<style>.error {color: #FF0000;}</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php

include '../connect/db.php';
$objname_resul = $objns_resul = $objdesc_resul = $objdep_resul ="";
$objnameErr = $objnsErr = $objdescErr = $objdepErr = "";
$objname = $objns = $objdesc = $objdep = "";

  
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    
    if (empty($_POST["objname"])) {
        $objnameErr = "Name is required";
      } else { if (!test_input($_POST["objname"])) {
        $objnameErr = "Texto no permitido";
        } else{ if ( strlen($_POST["objname"]) > 120 ) {
            $objnameErr = "120 caracteres permitidos";
          } else {
            $objname_resul = $_POST["objname"];
          }        
        }      
      }

    if (empty($_POST["objns"])) {
        $objnsErr = "Numero de serie requerido";
      } else { if (!test_input($_POST["objns"])) {
        $objnsErr = "Texto no permitido";
        } else{ if ( strlen($_POST["objns"]) > 120 ) {
            $objnsErr = "120 caracteres permitidos";
          } else {
            $objns_resul = $_POST["objns"];
          }        
        }      
      }
  
    if (empty($_POST["objdesc"])) {
        $objdescErr = "Descripcion requerida";
      } else { if (!test_input($_POST["objdesc"])) {
        $objdescErr = "Texto no permitido";
        } else{ if ( strlen($_POST["objdesc"]) > 450 ) {
            $objdescErr = "450 caracteres permitidos";
          } else {
            $objdesc_resul = $_POST["objdesc"];
          }        
        }      
      }

    if (empty($_POST["objdep"])) {
        $objdepErr = "Departamento requerido";
      } else { if (!test_input($_POST["objdep"])) {
        $objdepErr = "Texto no permitido";
        } else{ if ( strlen($_POST["objdep"]) > 120 ) {
            $objdepErr = "120 caracteres permitidos";
          } else {
            $objdep_resul = $_POST["objdep"];
          }        
        }      
      }
    if ($objname_resul > 0 && $objns_resul > 0 && $objdesc_resul > 0 && $objdep_resul > 0 ) {
      $sql = "INSERT INTO inventory (object_name, object_ns, object_description, object_id_department)
      VALUES ('$objname_resul', '$objns_resul', '$objdesc_resul', '$objdep_resul')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
    
} 
  






    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  


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
