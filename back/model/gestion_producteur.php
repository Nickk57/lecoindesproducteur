<?php

    function gestionProducteur() {

        $query = "SELECT pr.id, pr.name, pr.city, pr.first_name, pr.description, 
        pr.characte, pr.id_categ_producteur, pr.id_picture, pic.path
        FROM producteur as pr
        INNER JOIN picture as pic
        ON pr.id_picture = pic.id
        ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $gest_producteur = $req->fetchAll();
        return $gest_producteur;
    }

    