<?php

    function supAdmin() {
        
        if(isset($_GET['id'])) {
            $id = strval($_GET['id']);

            $query = "DELETE FROM admin WHERE id = :id";
            $req = dbConnect()->prepare($query);
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            
            if($req->execute() > 0) {
                $success = "L'admin est supprimer !";
                return $success;
            }
        }
    }