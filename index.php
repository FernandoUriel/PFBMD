<?php
    require "./config/configGeneral.php";
    require "./config/config.php";
    require_once  "./controllers/viewManager.php";
    require_once "./models/dbconnect.php";
    require_once "./models/queries.php";
    

    $plantilla= new viewManager();
    $plantilla->get_template_manager();
    
?>