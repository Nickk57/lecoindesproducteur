<?php

    require_once('model/vos_category_prod.php');

    function vos_category_pro() {

        $categ_producteur =  categoryProducteur();

        require('view/vos_category_prod.php');
    }