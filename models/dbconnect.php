<?php

include_once __DIR__."/../config/config.php";


class dbconnect{


    private $cnx;
   
     public static function connect(){
         $cnx = new mysqli(HOST,USER,PASSWORD,DB);
         if ($cnx->connect_error) {
            die('Error : (' . $cnx->connect_errno . ') ' . $cnx->connect_error);
         }
         return $cnx;
     }

   
  
}
?>