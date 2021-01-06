<?php

    require_once "views/viewMod.php";
    class viewManager extends viewMod{

        public function get_template_manager(){
            return require_once "./views/plantilla.php";
        }

        public function get_view_manager(){
            if(isset($_GET['views'])){
                $ruta=explode("/",$_GET['views']);
                $respuesta=self::get_view_mod($ruta[0]);
            }else{
                $respuesta="home";
            }
            return $respuesta;

        }
    }