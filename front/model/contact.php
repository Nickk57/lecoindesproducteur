<?php 

    function envoieMail() {
        // $dest = "guichard.nicolas57@gmail.com";
        // $name = htmlspecialchars($_POST['name']);
        // $first_name = htmlspecialchars($_POST['first_name']);
        // $sujet = htmlspecialchars($_POST['sujet']);
        // $corp = htmlspecialchars($_POST['message']). $name. $first_name;
        // $headers = "From: ".htmlspecialchars($_POST['email']); 
        // if(mail($dest, $sujet, $corp, $headers)) {
            // $success = "Email envoyé avec succès";
            // return $success;
        // }
        // else {
            // $success = "Echec de l'envoi de mail ...";
            // return $success;
        // }
    // }
        if(isset($_POST['submit'])) {
            //preparation du mail
            $dest = "guichard.nicolas57@gmail.com";
            $sujet = "Message de le coin des producteur de la part de: ". $_POST['name'];
            $entete = "From: ". $_POST['email'] . "\r\n";
            $entete .= "MINE-Version: 1.0" . "\r\n";
            $entete .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $message = 'Un message à été envoyé depuis lecoindesproducteur.fr  ' . $_POST['name'] .'
            <br />
            Email : ' .$_POST['email']. '
            <br />
            <br />
            Téléphone : '. $_POST['tel'].'
            <br />
            <br />
            Nom & prenom : '. $_POST['name'] . '' . $_POST['first_name'] . '
            <br />
            <br />
            Sujet : ' . $_POST['sujet'] .'
            <br />
            <br />
            Voici son message :
            <br />
            <br /> ' . $_POST['message'] . '
            <br />
            <br />
            --------------
            <br />
            <br />
            Ceci est un mail automatique, Merci de ne pas y répondre.';

            if(mail($dest, $sujet, $message, $entete)) {
                $success = "Email envoyé avec succès";
                return $success;
            }
            else {
                $success = "Echec de l'envoi de mail ...";
                return $success;
            }

            // mail($dest, $sujet, $message, $entete);
            // echo '
            // <script>
                // /*alert("Message envoyé"); */
                // window.addEventListener("load", () =>{$("MessageSent").modal("show");});
            // </spcript>';
        }
    }