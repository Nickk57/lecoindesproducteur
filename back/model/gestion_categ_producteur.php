<?php

    function gestionCategoryProducteur() {

        $query = "SELECT p.id, p.name, pic.path, p.id_picture
            FROM categ_producteur as p
            INNER JOIN picture as pic
            ON p.id_picture = pic.id
            ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $gest_categ_prod = $req->fetchAll();
        return $gest_categ_prod;
    }