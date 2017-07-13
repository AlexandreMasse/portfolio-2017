<?php


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    if(isset($_POST['message']) AND !empty($_POST['message']) AND isset($_POST['email']) AND !empty($_POST['email']) AND isset($_POST['sujet']) AND !empty($_POST['sujet']) AND isset($_POST['nom']) AND !empty($_POST['nom']) AND isset($_POST['prenom']) AND !empty($_POST['prenom'])
    ){


        /* envoi de l'e-mail */

        //To
        $destinataire = 'alexandre.masse94@gmail.com';


        $prov = 'Provenance du mail : '.$_POST['email'];

        // Function mail()
        mail($destinataire, $sujet, $message, $email);

        $reponse = "ok";
    }

    else {
        $reponse = "Tous les champs doivent être complétés";
    }

    echo json_encode([
        'reponse' => $reponse,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'sujet' => $sujet,
        'message' => $message

    ]);
?>