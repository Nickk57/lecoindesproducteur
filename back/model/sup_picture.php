<?php

    function supPicture() {

        $id = strval($_GET['id']);

        $query = "DELETE FROM picture WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        
        if($req->execute() > 0) {
            $success = "L'image est supprimer. ";
            return $success;
        }
    }