<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Document</title>
    <!-- CSS body -->
    <?php $url_body_css = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/css/body.css"?>    
    <link rel="stylesheet" href="<?php echo $url_body_css ?>">
    <link rel="stylesheet" href="css/index.css">
    
</head>
<body>
    <?php        
        session_unset();// remove all session variables        
        session_destroy();// destroy the session
    ?>
    <?php     
    include 'public_components/navbar.php';
    ?>
    <br>
    <div class="cont_logo">
        <img src="administrador/img/icono_CompuVisor.png" alt="">
    </div>

    
</body>
</html>