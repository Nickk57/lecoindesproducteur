<?php

    require_once('model/accueil.php');

    function gestion_product() {

        $nouveau_product = newProduct();

        $product_phar = productPhar();

        require('view/accueil.php');  
    }