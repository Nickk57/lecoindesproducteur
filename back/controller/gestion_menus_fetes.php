<?php

    require_once('model/gestion_menus_fetes.php');

    function gestion_menus_fetes() {
        
        $gest_menus = gestionMenusFetes();

        require('view/gestion_menus_fetes.php');
    }