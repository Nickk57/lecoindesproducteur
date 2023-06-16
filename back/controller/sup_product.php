<?php

    require_once('model/sup_product.php');

    function sup_product() {

        if(isset($_GET['id'])) {
            $id = $_GET['id'];

            supProduct($id);
        }

        require('view/sup_product.php');
    }