<?php

    require_once('model/contact.php');

    function envoie_mail() {
        $success = "";

        if(isset($_POST['submit'])) {
            $success = envoieMail();
        }

        require('view/contact.php');
    }