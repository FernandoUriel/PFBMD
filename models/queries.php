<?php 
 require_once __DIR__."/dbconnect.php";

class Consultas{

    private $db;
    public $users=array();
    private $con;

    public function __construct(){
        $this->db=dbconnect::connect();
        
    }


    public function getUsers(){
        
       
        $st = "SELECT IdUsuario, Nombre, Nickname, Telefono, Correo FROM Usuario";
        $query= $this->db->query($st); 

        if($query->num_rows > 0) {   
            while ($row =  $query->fetch_assoc() ) {
            $users[]=$row;     
           
                return $users;
            }
        }else{
            $user=null;
        }
        
    }

    public function loginValidation($nick,$pass){
        
        
        $st = "SELECT IdUsuario, Nickname, Avatar, TipoUsuario, Correo FROM Usuario WHERE Nickname='$nick' and Contrasena='$pass'";
        $result = mysqli_query($this->db,$st) or die(mysqli_error());
        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);

        if($num_row >= 1){
            return $row;
        }else{
            $user=null;
        }
       
           
    }

    public function registrarse($nombre,$aPaterno,$aMaterno,$nickname,$correo,$contrasena,$telefono,$tipoUsr,$imagen){
        $active=1;
        $st= "INSERT INTO Usuario(Nombre,ApellidoPaterno,ApellidoMaterno,Nickname,Correo,Contrasena,Telefono,TipoUsuario,Activo,Avatar) VALUES('$nombre','$aPaterno','$aMaterno','$nickname','$correo','$contrasena','$telefono',$tipoUsr,$active,'$imagen')";
        
            if($query=$this->db->query($st)==true){
                echo "agregado correctamente";
            }else{
                echo "Error: " . $st . "<br>" . $this->db->error;
            }


    }

    public function getImgn($id){
        $st="SELECT Avatar FROM Usuario WHERE IdUsuario='$id'";
        $result= mysqli_query($this->db,$st) or die(mysqli_error());
        $datos = mysqli_fetch_array($result);
        $imagen = $datos[0];
        
        header("Content-Type: image/jpeg");
                     
        return $imagen;
    }


    public function __destruct(){
        $this->db->close();
    }
    
   
}

