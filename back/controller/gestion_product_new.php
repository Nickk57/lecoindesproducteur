<?php

    require_once('model/gestion_product_new.php');

    function gestion_product_new() {

        $gest_product_new = gestionProductNew();

        require('view/gestion_product_new.php');
    }