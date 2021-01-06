<?php 
    session_start();
    include_once __DIR__."/../models/queries.php";

    $data = new Consultas();
    $id=$_GET['id'];

    if($id >0){
       
        $img = $data->getImgn($id);
        $imagen = $img['Avatar'];
        
        header("Content-Type: image/jpg");
               
        echo $imagen;
    }

?>