<?php

    function subCategory($id_category) {
        $query = "SELECT sub.id, sub.name, pic.path
            FROM sub_category as sub
            INNER JOIN picture as pic
            ON sub.id_picture = pic.id
            WHERE id_category = :id_category
            ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id_category', $id_category, PDO::PARAM_INT);
        $req->execute();
        $subCategProduct = $req->fetchAll();
        return $subCategProduct;
    }