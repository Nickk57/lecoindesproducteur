<?php

    require_once('model/vos_produit.php');

    function vos_product() {

        $id_subcategory = $_GET['id_subcategory'];
        // $id_producteur = $_GET['id_producteur'];

        $the_product = the_Product($id_subcategory);

       require('view/vos_produit.php'); 
    }