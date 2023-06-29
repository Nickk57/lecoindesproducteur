<?php

    require_once('model/ajout_product.php');

    function ajout_product() {
        $success = '';
        $selSubCategory = selectSubCategory();
        $selproducteurs = selectCategoryProducteur();

        if(isset($_POST['submit'])) {
            $success = ajoutPicture();
        }
        
        require('view/ajout_product.php');
    }