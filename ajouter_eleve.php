<html>
    <head>
        <meta charset="UTF-8">
        <title> "Ajouter un éleve"</title>
    </head>
    <body>
        <?php
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date_de_naissance = $_POST['date_de_naissance'];
            
            echo("Votre prénom : $prenom<br>");
            echo("Votre nom : $nom<br>");
            echo("Votre date de naissance : $date_de_naissance<br>");
        ?>
    </body>

</html>