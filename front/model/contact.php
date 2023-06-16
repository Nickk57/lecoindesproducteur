<?php 

    function envoieMail() {
    
        if(isset($_POST['submit'])) {
            //preparation du mail
            $dest = "guichard.nicolas57@gmail.com";
            $sujet = "Message de le coin des producteur de la part de: ". $_POST['name'] . '  ' . $_POST['first_name'];
            $entete = "From: ". $_POST['email'] . "\r\n";
            $entete .= "MINE-Version: 1.0" . "\r\n";
            $entete .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $message = 'Un message a été envoyé depuis lecoindesproducteur.fr
            <br />
            Email : ' .$_POST['email']. '
            <br />
            <br />
            Téléphone : '. $_POST['tel'].'
            <br />
            <br />
            Nom & Prénom : '. $_POST['name'] . '  ' . $_POST['first_name'] . '
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
            Ceci est un mail automatique, merci de ne pas y répondre.';

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