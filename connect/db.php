<?php

$enlace =  mysql_connect('localhost', 'usuario_mysql', 'contraseña_mysql');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);

?>