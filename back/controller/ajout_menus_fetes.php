<?php

    require_once('model/ajout_menus_fetes.php');

    function ajout_menus_fetes() {
        $success = '';

        if(isset($_POST['submit'])) {
            $success = ajoutPicture();
        }

        require('view/ajout_menus_fetes.php');
    }