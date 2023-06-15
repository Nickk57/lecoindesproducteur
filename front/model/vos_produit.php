<?php

    function the_Product($id_subcategory) {
        $query = "SELECT p.id, p.name, pic.id as id_picture, 
        pic.path, pro.id as id_producteur
            FROM product as p
            INNER JOIN picture as pic
            ON p.id_picture = pic.id
            INNER JOIN producteur as pro
            ON p.id_producteur = pro.id
            WHERE id_subcategory = :id_subcategory
            ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id_subcategory', $id_subcategory, PDO::PARAM_INT);
        $req->execute();
        $the_product = $req->fetchAll();
        return $the_product;
    }
