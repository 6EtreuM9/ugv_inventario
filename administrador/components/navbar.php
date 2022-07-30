<?php $url_css_nav = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/css/navbar.css"?>
<link rel="stylesheet" href="<?php echo $url_css_nav ?>">


<?php $url_inicio = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/administrador/paginas/inicio.php"?>
<?php $url_inventario = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/administrador/paginas/inventario.php"?>
<?php $url_usuarios = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/administrador/paginas/inventario.php"?>
<?php $url_cerrar = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/administrador/paginas/inventario.php"?>
<?php $url_webPrincipal = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/index.php"?>

<div class="topnav">
  <a class="active" href="<?php echo $url_inicio ?>">Inicio</a>
  <a href="<?php echo $url_inventario ?>">Inventario</a>
  <!--<a href="<?php //echo $url_usuarios ?>">Usuarios</a>
  <a href="<?php //echo $url_cerrar ?>">Cerrar</a>-->
  <div class="login-container">    
      <a href="<?php echo $url_webPrincipal ?>">Pagina WEB</a>
  </div>
</div>