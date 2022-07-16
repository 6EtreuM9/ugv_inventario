<link rel="stylesheet" href="css/list_user.css">
<link rel="stylesheet" href="css/button_eliminar.css">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<ul id="myUL">

<?php
include "connect/db.php";

/* comprueba la conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/**Seleccion tabla inventory = inventario */
$setencia = "SELECT * FROM inventory";
//Almacena los datos de la tabla seleccinada en la variable $resultado
$resultado = mysqli_query($enlace , $setencia);
//Bucle para imprimir los datos
while ($filas = mysqli_fetch_assoc($resultado)) {
  echo `
    <li>
    <a href="#">`; echo $filas['object_name'];  echo `</a>
    <div>
      <button class="tooltip button_tooltip" href="../components/ficha_element.php">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 283.5 283.5" style="enable-background:new 0 0 283.5 283.5;" xml:space="preserve"  height="20" width="20">
          <path d="M-0.4,139.5c1.8-6.4,6.6-10.7,10.8-15.5c14.8-16.9,31.2-32.2,49.9-44.8C78.7,66.6,98.6,57,120.8,52.9
            c19.8-3.6,39.3-1.9,58.3,4.5c26.4,8.8,49.2,23.9,69.4,42.7c10.6,9.9,20.3,20.9,30.1,31.6c5.9,6.4,5.7,14.2,0.2,20.8
            c-16.5,20-35,38-56.5,52.6c-18.5,12.6-38.4,22.2-60.6,26.3c-19.8,3.7-39.3,1.9-58.3-4.4c-26.4-8.8-49-23.8-69.2-42.5
            c-10.8-10-20.5-21.2-30.5-32c-1.9-2.1-2.8-5-4.2-7.6C-0.4,143.2-0.4,141.3-0.4,139.5z M141.3,76.3c-36.4-0.1-65.9,29.3-66.1,65.8
            c-0.2,36.3,29.1,65.8,65.8,66.1c36.4,0.3,66.2-29.4,66.2-66C207.2,105.8,177.8,76.4,141.3,76.3z"/>
          <path d="M186.8,142.3c-0.1,25.2-20.5,45.5-45.6,45.5c-25.2-0.1-45.5-20.5-45.5-45.6c0.1-25.2,20.5-45.5,45.6-45.5
            C166.5,96.8,186.8,117.2,186.8,142.3z M137.8,114c-13.7-1-26.1,12.7-25,24.9c4.8,0,9.7,0,14.5,0c0.9-5.5,3.7-9.1,9.2-10.1
            c0.5-0.1,1.2-0.9,1.2-1.4C137.8,123,137.8,118.5,137.8,114z"/>
        </svg>
        <span class="tooltiptext">Ver</span>
      </button>
      <button class="tooltip button_tooltip">
        <svg version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 283.5 283.5" style="enable-background:new 0 0 283.5 283.5;" xml:space="preserve" height="20" width="20">
        <path d="M0.5,78.6c1.6-4.4,2.7-9.2,5-13.3C12.2,54,22.5,48,35.6,47.9c31.3-0.2,62.6-0.1,93.9-0.1c7.3,0,12.5,5.2,12.4,12
          c-0.1,6.7-5.3,11.6-12.5,11.6c-30.7,0-61.3,0-92,0c-8.7,0-13.3,4.6-13.3,13.2c0,54.1,0,108.1,0,162.2c0,8.6,4.6,13.2,13.1,13.2
          c54.1,0,108.3,0,162.4,0c8.4,0,13-4.7,13-13.3c0-30.8,0-61.5,0-92.3c0-8.6,7.7-14.3,15.6-11.7c5,1.7,8,6.1,8,12
          c0,10.6,0,21.2,0,31.8c0,19.6,0,39.2,0,58.8c0,19.4-9,31.6-27.6,37.4c-0.2,0.1-0.3,0.2-0.4,0.3c-60,0-120.1,0-180.1,0
          c-0.7-0.3-1.3-0.6-2-0.8c-9.3-2.8-16.6-8.4-21.1-17c-2.1-3.9-3-8.4-4.5-12.6C0.5,194.7,0.5,136.7,0.5,78.6z"/>
        <path d="M283.5,33.9c-1.5,9.4-7.2,16.3-13.9,22.5c-3.7,3.4-7.2,7.1-10.5,10.5c-13.9-13.9-27.7-27.7-41.7-41.7c0.3-0.3,1-1.1,1.8-1.8
          c4.5-4.5,8.9-9,13.5-13.5c8.5-8.3,18.5-11.3,29.9-7.8c11.3,3.5,18.1,11.4,20.4,23.1c0.1,0.3,0.3,0.6,0.5,0.9
          C283.5,28.7,283.5,31.3,283.5,33.9z"/>
        <path d="M204.1,38.5c13.9,13.9,27.7,27.7,41.6,41.6c-0.5,0.5-1.1,1.2-1.7,1.8c-29.9,29.9-59.8,59.8-89.7,89.6
          c-1.7,1.7-4.2,3.1-6.6,3.6c-12.9,2.8-25.8,5.2-38.7,7.8c-5.3,1.1-8.8-2.3-7.8-7.5c2.7-13.4,5.4-26.9,8.2-40.3c0.3-1.4,1.1-3,2.1-4
          c30.7-30.8,61.4-61.5,92.2-92.2C203.8,38.7,204,38.6,204.1,38.5z"/>
        </svg>
        <span class="tooltiptext">Editar</span>
      </button>
      <button class="tooltip button_tooltip" onclick="document.getElementById('id01')" style.display='block'">
        <svg version="1.1" id="Capa_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 566.93 566.93" style="enable-background:new 0 0 566.93 566.93;" xml:space="preserve" height="20" width="20">
          <path d="M92.14,200.61c128.06,0,255.64,0,383.92,0c-0.63,14.17-1.2,27.98-1.85,41.78c-2.33,48.97-4.7,97.93-7.04,146.89
            c-2.08,43.5-4.05,87.01-6.26,130.5c-1.35,26.54-22.45,46.84-49.12,47c-40.18,0.24-80.37,0.07-120.56,0.08
            c-43.76,0-87.52,0.02-131.29-0.01c-31.23-0.02-51.48-18.91-53.04-50.24c-3.48-69.76-6.64-139.54-9.96-209.31
            c-1.57-32.99-3.22-65.98-4.8-98.98C92.04,205.88,92.14,203.41,92.14,200.61z M182.48,383.21c0.02,0,0.05,0,0.07,0
            c0.07,1.47,0.14,2.94,0.21,4.41c1.72,36.58,3.41,73.16,5.16,109.73c0.33,6.88,4.57,11.33,10.34,11.11c5.76-0.22,9.81-4.99,9.83-11.7
            c0.01-2.52-0.2-5.05-0.32-7.57c-1.97-41.62-3.93-83.24-5.92-124.87c-1.51-31.53-2.97-63.06-4.62-94.59
            c-0.39-7.37-4.92-11.58-10.98-11.02c-5.77,0.53-9.44,5.3-9.11,12.24C178.89,308.37,180.7,345.79,182.48,383.21z M385.51,383.76
            c-0.02,0-0.03,0-0.05,0c1.79-37.59,3.59-75.18,5.37-112.77c0.06-1.25,0.04-2.54-0.22-3.75c-1.19-5.45-4.67-8.57-10.22-8.36
            c-5.19,0.19-8.59,3.17-9.42,8.49c-0.42,2.69-0.59,5.44-0.72,8.17c-3.06,64.68-6.09,129.37-9.13,194.06
            c-0.43,9.24-1.09,18.48-1.2,27.72c-0.1,7.9,6.63,12.84,13.48,10.24c5.01-1.9,6.5-5.93,6.73-11
            C381.86,458.94,383.7,421.35,385.51,383.76z M294.09,383.05c0-36.6,0-73.19,0-109.79c0-1.89,0.19-3.83-0.16-5.67
            c-1.01-5.43-4.37-8.73-9.93-8.73c-5.56-0.01-8.93,3.27-9.95,8.71c-0.34,1.83-0.16,3.77-0.16,5.67c-0.01,73.61-0.01,147.22,0,220.83
            c0,1.89-0.18,3.84,0.19,5.66c1.05,5.14,4.35,8.09,9.58,8.48c4.91,0.37,9.4-3.39,10.23-8.45c0.34-2.05,0.19-4.19,0.19-6.3
            C294.09,456.66,294.09,419.86,294.09,383.05z"/>
          <path d="M284.04,70.45c63.12,0,126.24-0.01,189.36,0c22.64,0,34.18,11.54,34.2,34.14c0.01,14.31,0.03,28.62-0.01,42.93
            c-0.06,20.31-12.27,32.52-32.72,32.53c-74.48,0.04-148.97,0.02-223.45,0.02c-52.18,0-104.36-0.41-156.54,0.2
            c-21.33,0.25-35.92-14.12-34.67-34.76c0.84-13.84,0.15-27.77,0.16-41.66c0.03-21.64,11.85-33.38,33.67-33.39
            C157.38,70.43,220.71,70.45,284.04,70.45z"/>
          <path d="M219.4,50.08c-6.83,0-12.9,0-19.52,0c-2.17-10.61-0.28-20.41,5.52-29.38c8.39-13,20.54-19.58,35.99-19.64
            c28.61-0.11,57.22-0.14,85.83,0c26.44,0.13,44.68,22.01,40.6,48.83c-6.16,0-12.38,0-19.53,0c0-2.45,0.04-4.87-0.01-7.29
            c-0.27-12.97-8.53-21.3-21.46-21.34c-28.19-0.09-56.38-0.05-84.57-0.02c-14.54,0.02-22.42,8.02-22.6,22.75
            C219.64,45.84,219.51,47.69,219.4,50.08z"/>
        </svg>
        <span class="tooltiptext">Eliminar</span>
      </button>
    </div>

    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content" action="/action_page.php">
        <div class="container">
          <h1>Delete Account</h1>
          <p>Are you sure you want to delete your account?</p>

          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="button" class="deletebtn">Delete</button>
          </div>
        </div>
      </form>
    </div>
  </li>`;
}

/* cambia de test bd a world bd */
mysqli_select_db($enlace, "ugv_database");

/* devuelve el nombre de la base de datos actualmente seleccionada */
if ($result = mysqli_query($enlace, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Default database is %s.\n", $row[0]);
    mysqli_free_result($result);}

//mysqli_close($link);

?>
</ul>

<script src='js/list_user.js'></script>
<script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
</script>

