<?php
class Conexion {
private $SERVIDOR = "localhost";
private $USUARIO = "root";
private $CONTRASENA = "12345";
private $BASEDATOS = "mydb";
public $mysqli;
public function __construct(){
    $this->mysqli = new mysqli($this->SERVIDOR,$this->USUARIO,$this->CONTRASENA,$this->BASEDATOS);

    if($this->mysqli->connect_error) {
        echo "Fallo al conectar a MySQL: (" . $this->mysqli->connect_error . ") " . $this->mysqli->connect_error;
    }else{
       // echo "conexion exitosa";
    }
}
}
?>


    

