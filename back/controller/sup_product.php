<?php

    require_once('model/sup_product.php');

    function sup_product() {
        $success = '';

        if(isset($_GET['id'])) {

            supProduct();
        }

        require('view/sup_product.php');
    }