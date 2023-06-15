<?php

    function selectProduct($id) {

        $query = "SELECT * FROM product WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $selProduct = $req->fetch(PDO::FETCH_ASSOC);
        return $selProduct;
    }

    function selectSubCategory() {
        $query = "SELECT * FROM sub_category ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $subCategory = $req->fetchAll();
        return $subCategory;
    }

    function selectProducteur() {
        $query = "SELECT * FROM producteur ORDER BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $producteur = $req->fetchAll();
        return $producteur;
    }

    function selectBrand($id) {
        $query = "SELECT id, name FROM sub_category WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $brand = $req->fetchAll();
        return $brand;
    }

    function selectBrandPro($id) {
        $query = "SELECT id, name FROM producteur WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $brandPro = $req->fetchAll();
        return $brandPro;
    }

    // function selectBrandPic($id) {
    //     $query = "SELECT id, path FROM picture WHERE id = :id";
    //     $req = dbConnect()->prepare($query);
    //     $req->bindValue(':id', $id, PDO::PARAM_INT);
    //     $req->execute();
    //     $brandPic = $req->fetchAll();
    //     return $brandPic;
    // }

    function modificProduct($id) {

        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
        $id_subcategory = strval($_POST['id_subcategory']);
        $id_producteur = strval($_POST['id_producteur']);

        $query = "UPDATE product SET id = :id, name = :name, description = :description, 
        id_subcategory = :id_subcategory, id_producteur = :id_producteur 
        WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT).
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':description', $description, PDO::PARAM_STR);
        $req->bindValue(':id_subcategory', $id_subcategory, PDO::PARAM_INT);
        $req->bindValue(':id_producteur', $id_producteur, PDO::PARAM_INT);
        $req->execute();
    }