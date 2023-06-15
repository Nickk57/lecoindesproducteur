<?php

    function ajoutAdmin() {

        $email = $_POST['email'];
        $mdp = $_POST['password'];
        $prenom = strip_tags($_POST['first_name']);
        $name = strip_tags($_POST['name']);
        echo 'ok';
        $query = "INSERT INTO admin (name, first_name, email, password) 
        VALUES (:name, :first_name, :email, :password)";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':first_name', $prenom, PDO::PARAM_STR);
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':password', password_hash($mdp, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $success = $req->execute();
        return $success;
    }