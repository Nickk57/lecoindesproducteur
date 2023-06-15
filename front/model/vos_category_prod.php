<?php

    function categoryProducteur() {
        $query = "SELECT c.id, c.name, pic.path
            FROM categ_producteur as c
            INNER JOIN picture as pic
            ON c.id_picture = pic.id
            ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $categ_producteur = $req->fetchAll();
        return $categ_producteur;
    }