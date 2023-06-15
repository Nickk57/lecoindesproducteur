<?php

    function gestionSubCategory() {

        $query = "SELECT sb.id, sb.name, sb.id_category, pic.path, sb.id_picture
        FROM sub_category as sb
        INNER JOIN picture as pic
        ON sb.id_picture = pic.id
        ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $gest_subcategory = $req->fetchAll();
        return $gest_subcategory;
    }
    