<?php
require_once __DIR__ . "/vendor/autoload.php";
include("./controller/user.controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAZA</title>
    <link rel="stylesheet" href="./css/raza.css">
</head>
<body>
<section class="form-register">
        <form action="" method="post">

            <h4>Registro De Raza</h4>
            <input class="controls" type="text" name="id_R" placeholder="Introduzca el ID">
            <input class="controls" type="text" name="name_R" id="name" placeholder="Introduzca el nombre">
            <input class="controls" type="text" name="Tipo_R" placeholder="Introduzca Tipo Mascota">
            <input class="botons"   type="submit" value="Registrar" name="registro_r">

        </form>



</form> 
</body>
</html>