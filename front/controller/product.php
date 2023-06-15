<?php

    require_once('model/product.php');

    function the_products() {

        $id = $_GET['product'];
        
        $the_producteur = theProducteur();
        $products = product($id);

        require('view/product.php');
    }