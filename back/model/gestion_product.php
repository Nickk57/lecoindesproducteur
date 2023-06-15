<?php

    function gestionProduct() {

        $query = "SELECT p.id, p.name, p.description, p.id_picture, p.id_subcategory, 
        p.id_producteur, pic.path
        FROM product as p
        INNER JOIN picture as pic
        ON p.id_picture = pic.id
        ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $gest_product = $req->fetchAll();
        return $gest_product;
    }

    