
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
public function mascota(){
    if(!empty($_POST["registro_M"])){
        if(empty($_POST["id_M"]) or empty($_POST["name_M"]) or empty($_POST["F_nacimiento"]) or empty($_POST["id_P"]) or empty($_POST["Tipo_M"]) or empty($_POST["Raza_M"])) {
            
           echo 'campos vacios';
         
        
           
        }
    }
    if(isset($_POST["id_M"]) && isset($_POST["name_M"]) && isset ($_POST["F_nacimiento"]) && isset ($_POST["id_P"]) && isset ($_POST["Tipo_M"])&& isset ($_POST["Raza_M"])){

        $ID_M =$_POST["id_M"];
        $NAME_M =$_POST['name_M'];
        $F_NACIMIENTO =$_POST['F_nacimiento'];
        $ID_P =$_POST["id_P"];
        $TIPO_M =$_POST['Tipo_M'];
        $RAZA_M =$_POST["Raza_M"];

        $conexion= $this->mysqli->prepare("INSERT INTO mascota(id,nombre,FechaNacimiento,foto,User_id,TipoMascota_id,Raza_id)VALUES(?,?,?,NULL,?,?,?)");
        $conexion->bind_param('ssssss', $ID_M,$NAME_M,$F_NACIMIENTO,$ID_P,$TIPO_M,$RAZA_M);
        if( $conexion->execute()){
            echo "registrado";
          }/*else{
           echo"no registrado";
          }*/
    }
    

}
public function raza(){
    if(!empty($_POST["registro_r"])){

        if(empty($_POST["id_R"]) or empty($_POST["name_R"]) or empty($_POST["Tipo_R"])){
            echo 'campos vacios';
            exit;
         
        }

    }
    if(isset($_POST["id_R"]) && isset($_POST["name_R"]) && isset ($_POST["Tipo_R"])){
        $ID_R =$_POST["id_R"];
        $NAME_R =$_POST["name_R"];
        $TIPO_R =$_POST["Tipo_R"];
        $conexion=  $this->mysqli->prepare("INSERT INTO raza(id,nombre,TipoMascota_id)VALUES(?,?,?)");
        $conexion->bind_param('sss', $ID_R,$NAME_R,$TIPO_R);
        if( $conexion->execute()){
            echo "registrado";
          }
    }
}
public function tipo_mascota(){
    if(!empty($_POST["registro_T"])){

        if(empty($_POST["id_TM"]) or empty($_POST["name_TM"]) or empty($_POST["edad_JO"]) or empty($_POST["edad_AD"])  or empty($_POST["edad_ADUL"])){
            echo 'campos vacios';
            
         
        }
    } 
    if(isset($_POST["id_TM"]) && isset($_POST["name_TM"]) && isset($_POST["edad_JO"]) && isset($_POST["edad_AD"]) && isset($_POST["edad_ADUL"])){
        $ID_TM =$_POST["id_TM"];
        $NAME_TM =$_POST["name_TM"];
        $EDAD_JO =$_POST["edad_JO"];
        $EDAD_AD =$_POST["edad_AD"];
        $EDAD_ADUL =$_POST["edad_ADUL"];
        $conexion=  $this->mysqli->prepare("INSERT INTO tipomascota(id,nombre,EdadEquivalenteJoven,EdadEquivalenteAdulto,EdadAdulto)VALUES(?,?,?,?,?)");
        $conexion->bind_param('sssss',$ID_TM,$NAME_TM,$EDAD_JO,$EDAD_AD,$EDAD_ADUL);
        if( $conexion->execute()){
            echo "registrado";
          }
    }

}


}
$nama = new User_controller();
$nama->gender();
$nama->login();
$nama->mascota();
$nama->raza();
$nama->tipo_mascota();



?>

