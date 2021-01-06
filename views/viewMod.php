<?php
    class viewMod{
        public function get_view_mod($vistas){
            $listaBlanca=["register","adminDash","following","newCat","editingNew","editNew","writeNew","new","profile"];

        if(in_array($vistas, $listaBlanca)){
            if(is_file("./plugins/templates/".$vistas.".php")){
                $contenido="./plugins/templates/".$vistas.".php";
            }else{
                $contenido="home";
            }
        }elseif($vistas=="home"){
            $contenido="home";
        }elseif($vistas=="index")
        {
            $contenido=="home";
        }else{
            $contenido=="home";
        }
        return $contenido;
        }
    }