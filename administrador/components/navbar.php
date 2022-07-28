<?php $url_navbar_css = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/css/navbar.css"?>
<link rel="stylesheet" href=" <?php $url_navbar_css ?>">

<div class="topnav">
  <a class="active" href="/ugv_inventario/index.php">Inicio</a>
  <a href="/ugv_inventario/inventario.php">Inventario</a>
  <a href="/ugv_inventario/contact.php">Contacto</a>
  <div class="login-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Usuario" name="username">
      <input type="text" placeholder="Contraseña" name="psw">
      <button type="submit">Acceder</button>
    </form>
  </div>
</div>