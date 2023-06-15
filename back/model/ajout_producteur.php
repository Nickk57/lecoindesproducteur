<?php

    function selectCategProducteur() {
        $query = "SELECT * FROM categ_producteur GROUP BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $selCategproducteur = $req->fetchAll();
        return $selCategproducteur;
    }

    function ajoutPicture() {

        if (!isset($_POST['name']) || empty($_POST['name'])) {
            $success = "Il faut un nom et une image pour validé !";
            return $success;
        }
        else {    
            
            $name = strip_tags($_POST['name']);
            $city = strip_tags($_POST['city']);
            $producteur = strip_tags($_POST['first_name']);
            $description = strip_tags($_POST['description']);
            $characte = strip_tags($_POST['characte']);
            $id_producteur = $_POST['id_categ_producteur'];

            if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
                if ($_FILES['picture']['size'] <= 1000000) {
                    $fileInfo = pathinfo($_FILES['picture']['name']);
                    $extention = $fileInfo['extension'];
                    $allowedExtention = ['jpg', 'jpeg', 'gif', 'png', 'webp', 'svg'];

                    if (in_array($extention, $allowedExtention)) {
                        move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/'. basename($_FILES['picture']['name']));
                        $photo = 'uploads/'. basename($_FILES['picture']['name']);
                        echo "L'envoi a bien été effectué !";
                        $pictureCh = strip_tags('uploads/'. $_FILES['picture']['name']);
                        ajoutPictureBDD($name, $city, $producteur, $description, $characte, 
                        $id_producteur, $pictureCh);
                    }
                    else {
                        echo "Le format de fichier n'est pas autorisée. Merci de n'envoyer que des fichers en (.jpg, .jpeg, .png, .gif)";
                        exit;
                    }
                }
                else {
                    echo "Le fichier dépasse la taille autorisée !";
                    exit;
                }
            }
            else {
                echo "Le fichier n'a pas été envoyé correctement !";
                exit;
            }
        }
    }

    function ajoutPictureBDD($name, $city, $producteur, $description, $characte, 
    $id_producteur, $pictureCh) {

        $query = 'INSERT INTO picture (name, path) 
        VALUES (:name, :path)';
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':path', $pictureCh, PDO::PARAM_STR);
        $req->execute();

        $query = "SELECT id FROM picture ORDER BY id DESC LIMIT 1";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->execute();
        $pictureID = $req->fetch();
        ajoutProducteur($name, $city, $producteur, $description, $characte, 
        $pictureID[0], $id_producteur);
    }

    function ajoutProducteur($name, $city, $producteur, $description, $characte, 
    $pictureID, $id_producteur) {

        $query = "INSERT INTO producteur (name, city, first_name, description, characte, id_picture, id_categ_producteur) 
        VALUES (:name, :city, :first_name, :description, :characte, :id_picture, :id_categ_producteur)";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':city', $city, PDO::PARAM_STR);
        $req->bindValue(':first_name', $producteur, PDO::PARAM_STR);
        $req->bindValue(':description', $description, PDO::PARAM_STR);
        $req->bindValue(':characte', $characte, PDO::PARAM_STR);
        $req->bindValue(':id_picture', $pictureID, PDO::PARAM_INT);
        $req->bindValue(':id_categ_producteur', $id_producteur, PDO::PARAM_INT);
        
        if($req->execute() > 0) {
            $success = "ajout a bien étais fait";
            return $success;
        }
    }

