<link rel="stylesheet" href="css/conctact.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php
//------------------Valiadacion de datos - Requeridos
$objnameErr = $objnsErr = $objdescErr = $objdepErr = "";
$objname = $objns = $objdesc = $comment = $objdep = "";

//------------------Valiadacion de datos - Requeridos
$objnameErr = $objnsErr = $objdescErr = $objdepErr = "";
$objname = $objns = $objdesc = $comment = $objdep = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //--------------------------------------objeto nombre
  if (empty($_POST["objname"])) {
    $objnameErr = "Name is required";
  } else {
    $objname = test_input($_POST["objname"]);
  }
  //-------------------------------------objeto numero de serie
  if (empty($_POST["objns"])) {
    $objnsErr = "Email is required";
  } else {
    $objns = test_input($_POST["objns"]);
  }
  //-------------------------------------objeto descripcion
  if (empty($_POST["objdesc"])) {
    $objdescErr = "Descripcion requerida";
  } else {
    $objdesc = test_input($_POST["objdesc"]);
  }
//---------------------------------------objeto departamento
  if (empty($_POST["objdep"])) {
    $objdepErr = "";
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

?>


<div class="container">
    <form id="formInsetData" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <label for="objname">Nombre</label><span class="error">  * <?php echo $objnameErr;?></span>
        <input type="text" id="id_objname" name="objname" placeholder="Marca, Modelo, Color..">

        <label for="objns">Numero de Serie</label><span class="error">  * <?php echo $objnsErr;?></span>
        <input type="text" id="id_objns" name="objns" placeholder="Numero de Serie..">
        
        <label for="objdesc">Descripción</label><span class="error">  * <?php echo $objdescErr;?></span>
        <textarea id="id_subject" name="objdesc" placeholder="Write something.." style="height:200px"></textarea>
        
        

        <label for="objdep">Departamento</label><span class="error">  * <?php echo $objdepErr;?></span>
        <select id="id_objdepartament" name="objdep">
            <option value="administracion">Administración</option>
            <option value="academico">Academico</option>
            <option value="direccion">Dirección</option>
            <option value="planeacion">Planeación</option>
        </select>

        <button type="button" value="Submit" id="Bt_insert">Enviar</button>

    </form>
    <div id="respuesta"></div>
</div>

<script>

  $('#Bt_insert').click(function(){
    $.ajax({
      url:'connect/insert_object.php',
      type:'POST',
      data: $('#formInsetData').serialize(),
      success: function (res) {
        $('#respuesta').html(res);
      }
    });
  });
</script>                       
