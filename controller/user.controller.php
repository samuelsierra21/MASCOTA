
<?php
require_once(__DIR__ . "/../model/user.model.php");
require_once(__DIR__ . "/conexion.php");
class User_controller extends Conexion {
    public function gender() {
        if(isset($_POST["name"]) && isset ($_POST["id"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["rol"])) {
        $ID = $_POST["id"];
        $Name =$_POST["name"];
        $Username =$_POST["username"];
        $Email =$_POST["email"];
        $Password =$_POST["password"];
        $Rol =$_POST["rol"];
        $conexion = $this->mysqli->prepare("INSERT INTO user(id,nombre,username,email,passwor,Role_id,foto)VALUE(?,?,?,?,?,?,NULL)");
        $conexion->bind_param( 'ssssss',$ID, $Name,$Username,$Email,$Password,$Rol);
        $conexion->execute();
    }
}
}
$nama = new User_controller();
$nama->gender();
?>
