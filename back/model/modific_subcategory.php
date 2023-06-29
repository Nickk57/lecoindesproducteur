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

    function ajoutPicture($id) {

        if (!isset($_POST['name']) || empty($_POST['name'])) {
            $success = "Il faut un nom et une image pour validé !";
            return $success;
        }
        else {    
            
            $name = htmlspecialchars($_POST['name']);
            $id_category = $_POST['id_category'];
            $id_picture = $_POST['id_picture'];

            if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
                if ($_FILES['picture']['size'] <= 5000000) {
                    $fileInfo = pathinfo($_FILES['picture']['name']);
                    $extention = strtolower($fileInfo['extension']);
                    $allowedExtention = ['jpg', 'jpeg', 'gif', 'png', 'webp', 'svg', 'heic'];

                    if (in_array($extention, $allowedExtention)) {
                        move_uploaded_file($_FILES['picture']['tmp_name'], '../uploads/'. basename($_FILES['picture']['name']));
                        $photo = '../uploads/'. basename($_FILES['picture']['name']);
                        echo "L'envoi a bien été effectué !";
                        $pictureCh = strip_tags('uploads/'. $_FILES['picture']['name']);
                        ajoutPictureBDD($id, $name, $id_category, $id_picture, $pictureCh);
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

    function ajoutPictureBDD($id, $name, $id_category, $id_picture, $pictureCh) {

        $query = 'UPDATE picture SET id = :id, name = :name, path = :path';
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id_picture, PDO::PARAM_INT);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':path', $pictureCh, PDO::PARAM_STR);
        $req->execute();

        $query = "SELECT id FROM picture ORDER BY id DESC LIMIT 1";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->execute();
        $pictureID = $req->fetch();
        modificSubCategory($id, $name, $id_category, $pictureID[0]);
    }

    function modificSubCategory($id, $name, $id_category, $pictureID) {
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