<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Me contacter</title>
</head>
<body>
    <!--Formulaire de contact-->
    <form id="form" action="contact.php" method="post">
        <div class="contact">
            <!--Champs pour rentrer l'adresse mail-->
            <input type="email" placeholder="Votre Mail" id="email" name="email"/>
            <!--Liste où il faut sélectionner le sujet du mail-->
            <input type="text" placeholder="Sujet" name="Sujet">
        </div>
        <!--Contenu du message-->
        <textarea placeholder="Ecrivez votre message ici, je le recevrai dans ma boîte mail." id="message" name="message"></textarea>
        <br>
        <!--Bouton envoyer-->

        <!--Partie php qui permet d'envoyer le message directement dans ma boite mail-->
        <?php
        include 'php/send.php';
        ?>
        <input type="submit" name="nom" value="Envoyer">
    </form>
</body>
</html>