<?php require "../connect/autentication.php" ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Body CSS -->
    <?php $url_body_css = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/css/body.css"?>    
    <link rel="stylesheet" href="<?php echo $url_body_css ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!--Modificacion jumbotron CSS-->
    <link rel="stylesheet" href="../css_admin/jumbotron_inicio.css">
  </head>
  <body>

  <?php include "../components/navbar.php"?>
    <div class="content_jumbo">
      <div class="jumbotron">
        <h1 class="display-3">Modo administrador</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p class="more">More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
      </div>
    </div>
  </body>
</html>