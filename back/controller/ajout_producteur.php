<?php

    require_once('model/ajout_producteur.php');

    function ajout_producteur() {
        $success = '';
        $selCategproducteur = selectCategProducteur();

        if(isset($_POST['submit'])) {
            $success = ajoutPicture();
        }

        require('view/ajout_producteur.php');
    }