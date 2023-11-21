<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
<section class="Usuario">

    <form action="" method="post">
        <h4>BIENVENIDO</h4>
        <div></div>
        <input class="controls" type="text" name="username" id="username" placeholder="Introduzca su Usuario">
        <input class="controls" type="password" name="password" id="password" placeholder="Introduzca la contraseña">
        <input class="botons" type="submit" value="Iniciar Sesion" name="registrar">
    </form>
</section>
</body>
</html>
<?php
include("./controller/user.controller.php");
?>