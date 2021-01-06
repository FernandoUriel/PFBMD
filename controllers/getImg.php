<?php 
    session_start();
    include_once __DIR__."/../models/queries.php";

    $data = new Consultas();
    $id=$_GET['id'];

    if($id >0){
       
        $img = $data->getImgn($id);
        $img_src=$img[0];
           
        
        $img_out= "data:img/png;base64,'.$img_src.'";
                     
        echo $img_out;
    }

?>