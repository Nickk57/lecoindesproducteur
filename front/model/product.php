<?php

    function product($id_product) {
        $query = "SELECT p.id, p.name, p.description, p.id_producteur, pic.path, 
            pro.id as pod_id, pro.name as prod_name, pro.city as prod_city, pro.description as pord_descrip, 
            pro.characte as prod_char, pro.id_picture, propic.path as propic
            FROM product as p
            INNER JOIN picture as pic
            ON p.id_picture = pic.id
            INNER JOIN producteur as pro
            ON p.id_producteur = pro.id
            INNER JOIN picture as propic
            ON pro.id_picture = propic.id
            WHERE p.id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id_product, PDO::PARAM_INT);
        $req->execute();
        $products = $req->fetchAll();
        return $products;
    }
    function theProducteur() {
        $query = "SELECT pro.id, pro.name, pro.city, pro.description, pro.characte, pic.path
            FROM producteur as pro
            RIGHT JOIN product as p
            ON p.id_producteur as pro.id
            INNER JOIN picture as pic
            ON pro.id_picture = pic.id
            WHERE pro.id = :id_producteur";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $the_producteur = $req->fetchAll();
        return $the_producteur;
    }