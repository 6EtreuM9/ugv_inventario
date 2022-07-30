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

    <!--Insert Css-->
    <link rel="stylesheet" href="../css_admin/button_insert.css">
    <link rel="stylesheet" href="../css_admin/list_object.css">
    
</head>
<body>

<?php include "../components/navbar.php"?>

<div class="cont_view">
    <br>
    <div><a href="insert_object.php">
        <button type="submit" class="button_insert_register"><span>Nuevo Registro</span></button>
    </a></div>
    <br>

    <?php
    include '../connect/db.php';
    include 'list_object.php';
    ?>

</div>
</body>
</html>