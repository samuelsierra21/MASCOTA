<?php
require_once __DIR__ . "/vendor/autoload.php";
include("./controller/user.controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo Mascota</title>
    <link rel="stylesheet" href="./css/tipo_mas.css">
</head>
<body>
<section class="form-register">
        <form action="" method="post">

            <h4>Registro Tipo Mascota</h4>
            <input class="controls" type="text" name="id_TM" placeholder="Introduzca el ID">
            <input class="controls" type="text" name="name_TM" id="name" placeholder="Introduzca el nombre">
            <input class="controls" type="text" name="edad_JO" id="name" placeholder="Edad Joven ">
            <input class="controls" type="text" name="edad_AD" id="name" placeholder="Edad Adulto">
            <input class="controls" type="text" name="edad_ADUL" id="name" placeholder="Edad Adulta">
            <input class="botons"   type="submit" value="Registrar" name="registro_T">
        </form>



</form> 
</body>
</html>