<?php

    require_once('model/vos_producteur.php');

    function gestion_producteur() {
        
        $id_categ_prod = $_GET['id_category'];

        $theProducteur = theProducteur($id_categ_prod);
        
        require('view/vos_producteur.php');
    }