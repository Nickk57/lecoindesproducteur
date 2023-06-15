<?php

    function gestionProductNew() {

        $query = "SELECT p.id, p.name, p.description, p.id_picture, pic.id, pic.path
        FROM product as p
        INNER JOIN picture as pic
        ON p.id_picture = pic.id";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $gest_product_new = $req->fetchAll();
        return $gest_product_new;
    }