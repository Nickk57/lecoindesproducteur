<?php

    function category() {
        $query = "SELECT c.id, c.name, pic.path
        FROM category as c
        INNER JOIN picture as pic
        ON c.id_picture = pic.id
        ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $categ_product = $req->fetchAll();
        return $categ_product;
    }