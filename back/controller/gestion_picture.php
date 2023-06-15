<?php

    require_once('model/gestion_picture.php');

    function gestion_picture() {

        $gest_picture = gestionPicture();

        require('view/gestion_picture.php');
    }