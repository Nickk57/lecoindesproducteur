<?php

    require_once('model/gestion_producteur.php');
    $success = '';

    function gestion_producteur() {

        $gest_producteur = gestionProducteur();

        require('view/gestion_producteur.php');
    }