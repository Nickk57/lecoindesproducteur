<?php 

    function gestionMenusFetes() {

        $query = "SELECT m.id, m.name, m.id_picture, pic.path
            FROM menus_fetes as m
            INNER JOIN picture as pic
            ON m.id_picture = pic.id
            ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $gest_menus = $req->fetchAll();
        return $gest_menus;
    }