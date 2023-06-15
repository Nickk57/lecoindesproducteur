<?php

    function selectProducteur($id) {
        $query = "SELECT * FROM producteur WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $selProducteur = $req->fetch(PDO::FETCH_ASSOC);
        return $selProducteur;
    }

    function selectCategProducteur() {
        $query = "SELECT * FROM categ_producteur ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $categProducteur = $req->fetchAll();
        return $categProducteur;
    }

    function selectBrand($id) {
        $query = "SELECT id, name FROM categ_producteur WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $brand = $req->fetchAll();
        return $brand;
    }

    function modificProducteur($id) {
        $name = htmlspecialchars($_POST['name']);
        $city = htmlspecialchars($_POST['city']);
        $first_name = htmlspecialchars($_POST['first_name']);
        $description = htmlspecialchars($_POST['description']);
        $characte = htmlspecialchars($_POST['characte']);
        $id_categ_pro = strval($_POST['id_categ_producteur']);

        $query = "UPDATE producteur SET id = :id, name = :name, city = :city, 
            first_name = :first_name, description = :description, characte = :characte, 
            id_categ_producteur = :id_categ_producteur 
            WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':city', $city, PDO::PARAM_STR);
        $req->bindValue(':first_name', $first_name, PDO::PARAM_STR);
        $req->bindValue(':description', $description, PDO::PARAM_STR);
        $req->bindValue(':characte', $characte, PDO::PARAM_STR);
        $req->bindValue(':id_categ_producteur', $id_categ_pro, PDO::PARAM_INT);
        
        if($req->execute() > 0) {
            $success = "Modification fait !";
            return $success;
        }
    }