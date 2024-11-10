<?php
// je fais appel au fichier 'BackgroundBody.php'
require 'BackgroundBody.php';

// je vérifie que '$_GET' est bien défini
if (isset($_GET)) {
    // si '$_GET' est bien défini, je crée une nouvelle instance, et je base le nouvel objet sur la classe 'BackgroundBody()' et je passe '$_GET' en tant que paramètre au constructeur de la classe
    $color = new BackgroundBody($_POST);
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Body</title>

    <!-- style CSS -->
    <style>
        body {
            /* j'affecte au background la couleur retournée par la méthode 'getColor()' */
            background: <?php $color->getColor(); ?>;
        }
    </style>
</head>
<body>
    <form action="" method="">
        <input type="color" name="color">
        <input type="submit" value="Appliquer la couleur sélectionnée">
    </form>
</body>
</html>