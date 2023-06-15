<?php

    require_once('model/sup_subcategory.php');

    function sup_subcategory() {
        $success = '';

        if(isset($_GET['id'])) {
            $success = supSubCategory();
        }

        require('view/sup_subcategory.php');
    }