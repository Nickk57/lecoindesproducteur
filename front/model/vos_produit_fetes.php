<?php

    function menusNoel() {
        $query = "SELECT m.id, m.name, pic.path
            FROM menus_fetes as m
            INNER JOIN picture as pic
            ON m.id_picture = pic.id
            WHERE name LIKE 'noël%'";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $menusnoel = $req->fetchAll();
        return $menusnoel;
    }
    function menusPaquet() {
        $query = "SELECT m.id, m.name, pic.path
            FROM menus_fetes as m
            INNER JOIN picture as pic
            ON m.id_picture = pic.id
            WHERE name LIKE 'paquet%'";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $menuspaquet = $req->fetchAll();
        return $menuspaquet;
    }
    function menusHalloween() {
        $query = "SELECT m.id, m.name, pic.path
            FROM menus_fetes as m
            INNER JOIN picture as pic
            ON m.id_picture = pic.id
            WHERE name LIKE 'halloween%'";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $menushalloween = $req->fetchAll();
        return $menushalloween;
    }