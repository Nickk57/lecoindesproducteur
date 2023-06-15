<?php

    require_once('model/modific_categ_prod.php');

    function select_categ_prod() {

        if(isset($_GET['id_producteur'])) {
            $id = $_GET['id_producteur'];
            $selCategProd = selectCategory($id);

            if(isset($_POST['submit'])) {
                ajoutPicture($id);
                $selCategProd = selectCategory($id);
            }
        }
        require('view/modific_categ_prod.php');
    }