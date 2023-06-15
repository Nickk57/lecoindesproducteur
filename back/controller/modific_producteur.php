<?php

    require_once('model/modific_producteur.php');

    function modific_producteur() {
        $categProducteur = selectCategProducteur();
        $succcess = '';

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $id_categ_producteur = $_GET['id_categ_producteur'];
            $selProducteur = selectProducteur($id);
            $brand = selectBrand($id_categ_producteur);

            if(isset($_POST['submit'])) {
                $succcess = modificProducteur($id);
                $selProducteur = selectProducteur($id);
            }
        }

        require('view/modific_producteur.php');
    }