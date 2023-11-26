<?php
require_once __DIR__ . "/vendor/autoload.php";
include("./controller/user.controller.php");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Mascota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/mascota.css">
</head>
<body>
    <section class="form-register">
        <form action="" method="post">

            <h4>Registro De Mascota</h4>
            <input class="controls" type="text" name="id_M" placeholder="Introduzca el ID">
            <input class="controls" type="text" name="name_M" id="name" placeholder="Introduzca el nombre">
            <input class="controls" type="date" name="F_nacimiento" placeholder="Introduzca Fecha de Nacimiento">
            <input class="controls" type="text" name="id_P" placeholder="Introduzca su ID">
            <input class="controls" type="text" name="Tipo_M" placeholder="Introduzca tipo de Mascota" >
            <input class="controls" type="text" name="Raza_M" placeholder="Introduzca raza de Mascota" >
            <input class="botons"   type="submit" value="Registrar" name="registro_M">
            

        </form>

    </section>

    <h1 class="text-center">HOLA MUNDO</h1>

    <div class="container">
        <table class="table">
            <thead class="bg-info">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">FECHA NACIMIENTO</th>
                <th scope="col">USUARIO</th>
                <th scope="col">TIPO MASCOTA</th>
                <th scope="col">RAZA</th>
                <th scope="col"></th>
                </tr>
             </thead>
             <tbody>
                <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-solid fa-trash"></i></a>
                </td>
                
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>