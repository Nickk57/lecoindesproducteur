<?php

    function newProduct() {
        $query = "SELECT p.id, p.name, p.id_picture, pic.id, pic.path
        FROM product as p
        INNER JOIN picture as pic
        ON p.id_picture = pic.id
        LIMIT 6";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $nouveau_product = $req->fetchAll();
        return $nouveau_product;
    }
    function productPhar() {
        $query = "SELECT p.id, p.name, p.id_picture, pic.id, pic.path
        FROM product as p
        INNER JOIN picture as pic
        ON p.id_picture = pic.id
        LIMIT 6";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $product_phar = $req->fetchAll();
        return $product_phar;
    }