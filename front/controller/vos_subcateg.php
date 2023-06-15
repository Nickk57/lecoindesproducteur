<?php

    require_once('model/vos_subcateg.php');

    function vos_subcateg() {

        $id_category = $_GET['id_category'];

        $subCategProduct = subCategory($id_category);

        require('view/vos_subcateg.php');
    }