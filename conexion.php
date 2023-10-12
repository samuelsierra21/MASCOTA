<?php
$SERVIDOR = "localhost";
$USUARIO = "root";
$CONTRASENA = "12345";
$BASEDATOS = "mydb";

$mysqli = new mysqli($SERVIDOR,$USUARIO,$CONTRASENA,$BASEDATOS);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{
    echo "conexion exitosa";
}
?>