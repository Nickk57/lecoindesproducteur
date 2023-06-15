<?php

    require_once('model/sup_categ_producteur.php');

    function sup_categ_producteur() {
        $success = '';

        if(isset($_GET['id_producteur'])) {
            $success = supCategProducteur();
        }

        require('view/sup_categ_producteur.php');
    }