<?php

    require_once('model/sup_category.php');

    function sup_category() {
        $success = '';

        if(isset($_GET['id'])) {
            $success = supCategory();
        }

        require('view/sup_category.php');
    }