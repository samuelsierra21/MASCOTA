
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/registro.css">
</head>
<body>
<section class="form-register">

<form action="" method="post">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="id"  placeholder="Introduzca su id">
    <input class="controls" type="text" name="name" id="name" placeholder="Introduzca el nombre">
    <input class="controls" type="text" name="username" id="username" placeholder="Introduzca el apodo">
    <input class="controls" type="email" name="email" id="email" placeholder="Introduzca el correo">
    <input class="controls" type="password" name="password" id="password" placeholder="Introduzca la contraseña">
    <input class="controls" type="text" name="rol" id="rol" placeholder="Introduzca su rol">

    <p> Estoy de acuerdo con <a href="#">Terminos y condiciones</a></p>
    <input class="botons" type="submit" value="Registrar" name="registro">
    <p><a href="#">¿Ya tengo Cuenta?</a></p>
    <?php
require_once __DIR__ . "/vendor/autoload.php";
include("./controller/user.controller.php");

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ ."");
$dotenv->load();

?>

</form>

</section>
</body>
</html>
