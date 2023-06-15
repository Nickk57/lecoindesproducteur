<?php

    require_once('model/vos_product_prod.php');

    function vos_produits_pro() {

        $id_subcategprod = $_GET['id_producteur'];

        $the_product_pro = prodProduct($id_subcategprod);

        require('view/vos_product_prod.php');
    }