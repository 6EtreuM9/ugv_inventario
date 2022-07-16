<?php

$enlace = mysqli_connect('localhost', 'Rigel', '1234');
if (!$enlace) {
    die('No pudo conectarse: ' . mysqli_error());
}
echo 'Conectado satisfactoriamente <br>';
//mysqli_close($enlace);

?>