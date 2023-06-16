<?php

    function selectCateg() {
        $query = "SELECT * FROM category GROUP BY name ASC";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $selectCategory = $req->fetchAll();
        return $selectCategory;
    }

    function ajoutPicture() {

        if (!isset($_POST['name']) || empty($_POST['name'])) {
            $success = "Il faut un nom et une image pour validé !";
            return $success;
        }
        else {    
            
            $name = strip_tags($_POST['name']);
            $id_category = $_POST['id_category'];

            if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
                if ($_FILES['picture']['size'] <= 5000000) {
                    $fileInfo = pathinfo($_FILES['picture']['name']);
                    $extention = strtolower($fileInfo['extension']);
                    $allowedExtention = ['jpg', 'jpeg', 'gif', 'png', 'webp', 'svg', 'heic'];

                    if (in_array($extention, $allowedExtention)) {
                        move_uploaded_file($_FILES['picture']['tmp_name'], '../le_coin_des_producteur/uploads/'. basename($_FILES['picture']['name']));
                        $photo = '../le_coin_des_producteur/uploads/'. basename($_FILES['picture']['name']);
                        echo "L'envoi a bien été effectué !";
                        $pictureCh = strip_tags('uploads/'. $_FILES['picture']['name']);
                        ajoutPictureBDD($name, $id_category, $pictureCh);
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

    function ajoutPictureBDD($name, $id_category, $pictureCh) {

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
        ajoutSubCategory($name, $id_category, $pictureID[0]);
    }
    
    function ajoutSubCategory($name, $id_category, $pictureID) {
        $name = htmlspecialchars($_POST['name']);

        $query = "INSERT INTO sub_category (name, id_category, id_picture) 
        VALUES (:name, :id_category, :id_picture)";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':id_category', $id_category, PDO::PARAM_INT);
        $req->bindValue(':id_picture', $pictureID, PDO::PARAM_INT);

        if($req->execute() > 0) {
            $success = "La sous-categorie à étais ajouter.";
            return $success;
        }
    }