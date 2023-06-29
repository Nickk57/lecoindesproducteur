<?php

    require_once('model/ajout_categ_producteur.php');

    function ajout_categ_producteur() {
        $success = '';

        if(isset($_POST['submit'])) {
            $success = ajoutPicture();
        }

        require('view/ajout_categ_producteur.php');
    }