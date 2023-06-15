<?php

    require_once('model/connect_admin.php');
    
    function connect_admin() {

        $success = '';

        if(isset($_POST['submit'])) {
            
            $success = adminConnect();

        }

        require('view/connect_admin.php');
    }