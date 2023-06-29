<?php 

    function supMenusFetes() {
        $succes = "Le menus est supprimer !";

        if(isset($_GET['id'])) {
            $id = strval($_GET['id']);
            $id_picture = strval($_GET['id_picture']);

            $query = "DELETE FROM picture WHERE id = :id";
            $req = dbConnect()->prepare($query);
            $req->bindValue(':id', $id_picture, PDO::PARAM_INT);
            $req->execute();

            $query = "DELETE FROM menus_fetes WHERE id = :id";
            $req = dbConnect()->prepare($query);
            $req->bindValue(':id', $id, PDO::PARAM_INT);

            if($req->execute() > 0) {
                return;
            }
        }
    }