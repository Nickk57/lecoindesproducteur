<?php

    require_once('model/vos_category.php');

    function vos_category() {
        
        $categ_product = category();

        require('view/vos_category.php');
    }