<?php

    require_once('model/ajout_admin.php');
    require_once('model/model.php');

    function ajout_admin() {
        $success = '';

        if(isset($_POST['submit'])) {
            $success = ajoutAdmin();
        }

        require('view/ajout_admin.php');
    }