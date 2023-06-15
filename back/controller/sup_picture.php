<?php

    require_once('model/sup_picture.php');

    function sup_picture() {

        if(isset($_GET['id'])) {
            $success = supPicture();
        }

        require('view/sup_picture.php');
    }