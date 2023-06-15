<?php

    function adminConnect() {

        $email = htmlspecialchars($_POST['email']);
        $_SESSION['email'] = $email;
        $mdp = $_POST['password'];

        $query = "SELECT * FROM admin WHERE email = :email";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->execute();
        $reponse = $req->fetch();
        $hash = $reponse['password'];

        if(password_verify($mdp, $hash)) {
            header("location: index.php");
        }
        else {
            echo 'Le mot de passe est invalide. ';
        }
    }