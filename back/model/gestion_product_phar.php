<?php

    function gestionProductPhar() {

        $query = "SELECT p.id, p.name, p.description, p.id_picture, pic.id, pic.path
        FROM product as p
        INNER JOIN picture as pic
        ON p.id_picture = pic.id
        LIMIT 6";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $gest_product_phar = $req->fetchAll();
        return $gest_product_phar;
    }