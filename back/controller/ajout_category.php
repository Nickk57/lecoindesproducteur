<?php

    require_once('model/ajout_category.php');

    function ajout_category() {
        $success = '';
        
        if(isset($_POST['submit'])) {
            $success = ajoutPicture();
            
        }

        require('view/ajout_category.php');
    }