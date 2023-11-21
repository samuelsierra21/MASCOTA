
<?php
require_once(__DIR__ . "/../model/user.model.php");
require_once(__DIR__ . "/conexion.php");
class User_controller extends Conexion {
    public function gender() {
        if(!empty($_POST["registro"])){
            if(empty($_POST["name"]) or empty($_POST["id"]) or empty($_POST["username"]) or empty($_POST["email"]) or empty($_POST["password"]) or empty($_POST["rol"])){
             ?>
              <h1 class="alert">perdiste</h1>
             <?php
                header('login.php');
               die();
            }
        }

        if(isset($_POST["name"]) && isset ($_POST["id"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["rol"])) {
        $ID =$_POST["id"];
        $Name =$_POST["name"];
        $Username =$_POST["username"];
        $Email =$_POST["email"];
        $Password =$_POST["password"];
        $Rol =$_POST["rol"];
        $conexion = $this->mysqli->prepare("INSERT INTO user(id,nombre,username,email,passwor,Role_id,foto)VALUE(?,?,?,?,?,?,NULL)");
        $conexion->bind_param( 'ssssss',$ID, $Name,$Username,$Email,$Password,$Rol);
       if( $conexion->execute()){
         echo "registrado";
       }else{
        echo"no registrado";
       }
    }
}
public function login() {
     
    if  (!empty($_POST["registrar"])){
    if (empty($_POST["username"]) and empty($_POST["password"])) {
        echo "LOS CAMPOS ESTAN VACIOS";
    }else{ 
        
        $USUARIO=$_POST["username"];
        $CLAVE=$_POST["password"];
        $conexion= $this->mysqli->query("SELECT * FROM user WHERE  username= '$USUARIO' and passwor= '$CLAVE' ");
        //$conexion->bind_param('ss',$USUARIO,$CLAVE);
      
        if ($loca = $conexion->fetch_object()){
        header("location:inicio.php");
        }else{
            echo "no existe";
        }
        

    }

}
}
}
$nama = new User_controller();
$nama->gender();
$nama->login();



?>

