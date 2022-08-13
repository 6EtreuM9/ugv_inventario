<?php require "../connect/autentication.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Body CSS -->
    <?php $url_body_css = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/css/body.css"?>    
    <link rel="stylesheet" href="<?php echo $url_body_css ?>">

    <link rel="stylesheet" href="../css_admin/form.css">

    <link rel="stylesheet" href="../css_admin/button_closet.css">
    <style>.error {color: #FF0000;}</style>
    

</head>
<body>

<div>
  <?php $url_button = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/administrador/paginas/inventario.php"?> 
  <a href="<?php echo $url_button ?>">
    <button  class="noselect button_closet" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg></button>
  </a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php

include '../connect/db.php';

    $upd = $_POST['updid'];
    $sql = "SELECT * FROM inventory WHERE object_id='".$upd."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
        

?>

<div class="container">
    
    <form id="formInsetData" method="POST" action="../connect/update.php">
    <input type="hidden" value="<?php echo $row['object_id']?>" name="idobj">
    <h1>ACTUALIZANDO REGISTRO #<?php echo $row['object_id']?></h1>
    <table class="tabForm_insertObj">    
      <tr>
            <td><label for="objname">Nombre</label></td>
            <td><input type="text" id="id_objname" value="<?php echo $row['object_name']?>" name="objname" placeholder="Marca, Modelo, Color.." require></td>
          </tr>
          <tr>
            <td><label for="objns">Numero de Serie</label></td>
            <td><input type="text" id="id_objns" value="<?php echo $row['object_ns']?>" name="objns" placeholder="Numero de Serie.." require></td>
          </tr>
          <tr>
            <td><label for="objdesc">Descripción</label></td>
            <td><textarea id="id_subject"  name="objdesc" placeholder="Write something.." style="height:200px" require><?php echo $row['object_description']?></textarea></td>
          </tr>
          <tr>
            <td><label for="objdep">Departamento</label></td>
            <td><select id="id_objdepartament" name="objdep" require>
              <option selected hidden value=""><?php echo $row['object_id_department']?></option>
              <option value="administracion">Administración</option>
              <option value="academico">Academico</option>
              <option value="direccion">Dirección</option>
              <option value="planeacion">Planeación</option>
          </select></td>
          </tr>
        </table>
        <br><br><br>
        <input type="submit" name="submit" value="Agregar" onclick="ValidatioInput()">
    </form>
    <!--<div id="respuesta">
    <?php
      echo "nombre:".$objname_resul."<br>";
      echo "ns:".$objns_resul."<br>";
      echo "description:".$objdesc_resul."<br>";
      echo "dependencia:".$objdep_resul;
      ?>
    </div>-->
</div>



</body>
</html>