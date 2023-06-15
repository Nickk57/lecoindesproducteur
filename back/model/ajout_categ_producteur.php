<?php

    function ajoutCategProducteur() {
        $name = htmlspecialchars($_POST['name']);

        $query = "INSERT INTO categ_producteur (name) VALUES (:name)";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $name, PDO::PARAM_STR);

        if($req->execute() > 0) {
            $success = "La categorie a été ajoutée";
            return $success;
        }
    }