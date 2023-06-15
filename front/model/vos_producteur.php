<?php

    function theProducteur($id_categ_prod) {
        $query = "SELECT pro.id, pro.name, pro.city, 
            pro.description, pro.characte, pic.path
            FROM producteur as pro
            INNER JOIN picture as pic
            ON pro.id_picture = pic.id
            WHERE id_categ_producteur = :id_categ_producteur
            ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id_categ_producteur', $id_categ_prod, PDO::PARAM_INT);
        $req->execute();
        $theProducteur = $req->fetchAll();
        return $theProducteur;
    }