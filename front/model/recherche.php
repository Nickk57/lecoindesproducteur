<?php

    function search() {

        $recherche = $_POST['search'];

        if(strlen($recherche) > 100){
            $success = "L'entrée de recherhce est trop longue !";
            return $success;
        }
        if(!preg_match('/^[a-zA-Z0-9 ]+$/', $recherche)) {
            $success = "L'entrée de recherche contient des caractères non autorisés";
            return $success;
        }
        $query = "SELECT * FROM product WHERE name LIKE '%$recherche%'";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $recherche = $req->fetchAll();
        return $recherche;
    }