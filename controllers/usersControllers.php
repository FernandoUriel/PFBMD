<?php

    session_start();
    include_once __DIR__."/../models/queries.php";

    $data = new Consultas();
    $user= array();

    switch($_POST['action']){

        case 'login':
            if(isset($_POST['username'],$_POST['password'])){
        
                $user=$data->loginValidation($_POST['username'],$_POST['password']);
               
                if($user!=null){
                    $_SESSION['id'] = $user['IdUsuario'];
                    $_SESSION['username'] = $user['Nickname'];
                    $_SESSION['tipoUsuario'] = $user['TipoUsuario'];
              
                    echo 'true';
                    
                }else{
                    echo 'false';
                }
                
            
            }
           
        break;

        case 'registro-r':
            $file = $_FILES['img-r']["tmp_name"];
            $tamanio = $_FILES['img-r']["size"];
            $tipo = $_FILES['img-r']["type"];
            $titulo = $_FILES['img-r']["name"];
            
            $tipo=2;

            if($file != "none"){
                $fp = fopen($file,"rb");
                $contenido = fread($fp,$tamanio);
                
                $image = base64_encode(file_get_contents($file));
                fclose($fp);
               
                $data->registrarse($_POST['nombre-r'],$_POST['apePaterno-r'],$_POST['apeMaterno-r'],$_POST['nickname-r'],$_POST['correo-r'],
                               $_POST['contra-r'],$_POST['telefono-r'],$tipo,$image);
            }
            
        break;

        case 'registro-u':
            
            $file = $_FILES['img-u'];
            $tipo=3;

            if($file != "none"){
                $fp = fopen($file,"rb");
                $contenido = fread($fp,filesize($file));
                fclose($fp);
                $data->registrarse($_POST['nombre-u'],$_POST['apePaterno-u'],$_POST['apeMaterno-u'],$_POST['nickname-u'],$_POST['correo-u'],
                                $_POST['contra-u'],$_POST['telefono-u'],$tipo,$contenido);
            }
        break;
        case 'logout':
            unset($_SESSION['id']);
            unset($_SESSION['username']);
            unset($_SESSION['tipoUsuario']);
            
            echo "true";
        break;
       
    }

    
    


?>