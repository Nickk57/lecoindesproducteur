<?php

    function prodProduct($id_subcategprod) {
        $query = "SELECT p.id, p.name, p.description, pic.path
            FROM product as p
            INNER JOIN picture as pic
            ON p.id_picture = pic.id
            WHERE id_producteur = :id_producteur
            ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id_producteur', $id_subcategprod, PDO::PARAM_INT);
        $req->execute();
        $the_product_pro = $req->fetchAll();
        return $the_product_pro;
    }