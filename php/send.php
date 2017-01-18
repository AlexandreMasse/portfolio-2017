<?php
    if(isset($_POST['message']) AND !empty($_POST['message']) AND isset($_POST['email']) AND !empty($_POST['email']) AND isset($_POST['sujet']) AND !empty($_POST['sujet']) AND isset($_POST['nom']) AND !empty($_POST['nom']) AND isset($_POST['prenom']) AND !empty($_POST['prenom'])
    ){
        /* envoi de l'e-mail */
        //envoie mail
        //To
        $to = 'alexandre.masse94@gmail.com';
        // Subject
        $subject = $_POST['sujet'];
        // Message
        $msg = $_POST['message'];
        $prov = 'Provenance du mail : '.$_POST['email'];
        // Function mail()
        mail($to, $subject, $msg, $prov);
        echo"Votre message a bien été envoyé !";
    }

    /*else if(isset($_POST['message'])){
        echo"Votre message n'a pas pu être envoyé. Veuillez compléter correctement tous les champs.";
    }*/
?>