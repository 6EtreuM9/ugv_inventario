<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/button_insert.css">
    <link rel="stylesheet" href="css/list_object.css">
    <title>Document</title>
</head>
<body>
<?php 
    include 'components/navbar.php';
?>
<br>
<div><a href="insert_object.php">
    <button type="submit" class="button_insert_register"><span>Nuevo Registro</span></button>
</a></div>
<br>

<?php

include 'connect/db.php';
include 'components/list_object.php';

?>
</body>
</html>