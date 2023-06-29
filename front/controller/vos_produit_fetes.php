<?php

    require_once('model/vos_produit_fetes.php');

    function menus_fetes() {

        $menusnoel = menusNoel();
        $menuspaquet = menusPaquet();
        $menushalloween = menusHalloween();

        require('view/vos_produit_fetes.php');
    }