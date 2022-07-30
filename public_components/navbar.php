<?php $url_css_nav = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/css/navbar.css"?>
<link rel="stylesheet" href="<?php echo $url_css_nav ?>">

<?php $url_login = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/administrador/index.php"?>
<?php $url_login = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/administrador/index.php"?>
<?php $url_inicio = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/index.php"?>
<?php $url_consulta = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/public_components/view_object.php"?>
<?php $url_contacto = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/public_components/contact_form.php"?>

<div class="topnav">
  <a class="active" href="<?php echo $url_inicio ?>">Inicio</a>
  <a href="<?php echo $url_consulta ?>">Consulta</a>
  <!--<a href="<?php echo $url_contacto ?>">Contacto</a>-->
  <div class="login-container">    
      <a href="<?php echo $url_login ?>">Login Admin</a>
  </div>
</div>