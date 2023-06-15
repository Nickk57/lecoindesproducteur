<?php

    require_once('model/sup_producteur.php');

    function sup_producteur() {
        $success = '';

        if(isset($_GET['id'])) {
            $success = supProducteur();
        }

        require('view/sup_producteur.php');
    }