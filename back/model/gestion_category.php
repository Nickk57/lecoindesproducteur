<?php

    function gestionCategory() {

        $query = "SELECT c.id, c.name, pic.path, c.id_picture
        FROM category as c
        INNER JOIN picture as pic
        ON c.id_picture = pic.id
        ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $gest_category = $req->fetchAll();
        return $gest_category;
    }

    