<?php
if ($_POST) {
    header('Location:/ugv_inventario/administrador/paginas/inicio.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php $url_body_css = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/css/body.css"?>    
    <link rel="stylesheet" href="<?php echo $url_body_css ?>">

    <link rel="stylesheet" href="css_admin/index_admin.css">
    <link rel="stylesheet" href="css_admin/button_closet.css">
</head>
<body>
    <div>
    <?php $url_home = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/index.php"?> 
    <a href="<?php echo $url_home ?>">
        <button  class="noselect button_closet" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg></button>
    </a>
    </div>
    <div class="content_login">
        <div class="div_login">
            <img class="icono_logo" src="img/icono_CompuVisor.png" alt="">
            <h1>Bienvenido</h1>
            <p>Administrador</p> <br>
            <div class="div_form_login">
                <form method="POST">
                    <label for="login_name">Usuario</label> <br>
                    <input type="text" name="login_name" id="">
                    <br>
                    <label for="login_pass">Contraseña</label> <br>
                    <input type="password" name="login_pass" id="">
                    <br><br>
                    <button type="submit" class="login_button_click" name="">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>