<?php

    require_once('model/gestion_product_phar.php');

    function gestion_product_phar() {
        
        $gest_product_phar = gestionProductPhar();

        require('view/gestion_product_phar.php');
    }