<?php

    function supProduct($id) {
        $success = "Le produit est supprimer !";

        $query = "DELETE FROM product WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        
        if($req->execute() > 0) {
            return $success;
        }
    }