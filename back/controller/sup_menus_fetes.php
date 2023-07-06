<?php

    require_once('model/sup_menus_fetes.php');

    function sup_menus_fetes() {
        $success = "";

        if(isset($_GET['id'])) {

            $success = supMenusFetes();
        }

        require('view/sup_menus_fetes.php');
    }