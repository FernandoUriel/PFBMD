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
            $file = $_FILES['img-r'];
            $tipo=3;

            if($file != "none"){
                $fp = fopen($file,"r+b");
                $contenido = fread($fp,filesize($file));
                fclose($fp);
                $img = mysql_real_escape_string($contenido);
                $data->registrarse($_POST['nombre-r'],$_POST['apePaterno-r'],$_POST['apeMaterno-r'],$_POST['nickname-r'],$_POST['correo-r'],
                               $_POST['contra-r'],$_POST['telefono-r'],$tipo,$img);
            }
            
        break;

        case 'registro-u':
            
            $file = $_FILES['img-u']['tmp_name'];
            $tipo=4;

            if($file != "none"){
                $fp = fopen($file,"r+b");
                $contenido = fread($fp,filesize($file));
                fclose($fp);
                $img = mysql_real_escape_string($contenido);
                $data->registrarse($_POST['nombre-u'],$_POST['apePaterno-u'],$_POST['apeMaterno-u'],$_POST['nickname-u'],$_POST['correo-u'],
                                $_POST['contra-u'],$_POST['telefono-u'],$tipo,$img);
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