<?php
    require_once('model/gestion_subcategory.php');

    function gestion_subcategory() {

        $gest_subcategory = gestionSubCategory();

        require('view/gestion_subcategory.php');
    }