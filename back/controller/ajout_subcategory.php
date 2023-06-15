<?php

    require_once('model/ajout_subcategory.php');

    function ajout_subcategory() {
        $success = '';
        $selectCategory = selectCateg();

        if(isset($_POST['submit'])) {
            $success = ajoutPicture();
        }

        require('view/ajout_subcategory.php');
    }