<?php

    function selectBrand($id) {
        $query = "SELECT * FROM category WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $brand = $req->fetchAll();
        return $brand;
    }

    function selectSubCategory($id) {

        $query = "SELECT * FROM sub_category WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $selSubCategory = $req->fetch(PDO::FETCH_ASSOC);
        return $selSubCategory;
    }

    function selectCategory() {
        $query = "SELECT * FROM category ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $category = $req->fetchAll();
        return $category;
    }

    function modificSubCategory($id) {
        $name = htmlspecialchars($_POST['name']);
        $id_category = strval($_POST['id_category']);

        $query = "UPDATE sub_category SET name = :name, id_category = :id_category 
        WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':id_category', $id_category, PDO::PARAM_INT);
        $req->execute();
    }