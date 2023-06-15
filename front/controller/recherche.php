<?php

    require_once('model/recherche.php');

    function search_product() {
        $success = '';

        if(isset($_POST['submit'])) {
            $recherche = search();
        }

        require('view/recherche.php');
        
    }