<?php

    require_once('model/gestion_categ_producteur.php');

    function gestion_categ_producteur() {
        $success = '';

        $gest_categ_prod = gestionCategoryProducteur();

        require('view/gestion_categ_producteur.php');
    }