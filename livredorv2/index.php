<?php


// Appel des constantes permettant la connexion à la DB
require_once "config.php";

// Connexion à la DB
$db = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME,DB_PORT);

// on met notre connexion au format utf8
mysqli_set_charset($db,DB_CHARSET);

/*
Si on a envoyé le formulaire, on va essayer de l'insérer dans la DB
*/

// la méthode POST n'est pas vide
if(!empty($_POST)){

    // on retire les espaces à l'avant et à l'arrière du texte
    $leNom = trim($_POST['themessagesname']);
    // on empèche les attaques par scripts, et toutes les balises html etc...
    $leNom = strip_tags($leNom);
    // on va convertir les caractères spéciaux en entités html avec le ' et le " compris
    $leNom = htmlspecialchars($leNom,ENT_QUOTES);

    // Même chose que leNom en une seule ligne
    $leMessage = htmlspecialchars(strip_tags(trim($_POST['themessagestext'])),ENT_QUOTES);


    // on vérifie si nos résultats sont vides
    if(empty($leNom)||empty($leMessage)){
        $erreur = "Vos champs ne peuvent être vides!";
    // sinon on insère dans la DB    
    }else{


        mysqli_query($db,"INSERT INTO themessages (themessagesname,themessagestext) 
        VALUES ('$leNom','$leMessage')")or die(mysqli_error($db)); 

    }

}


/*
Récupération des messages
*/

    // on va récupérer tous les messages de la table "messages" 
    // par date descendante et ensuite par ID desc (pour le même jour, on respecte l'ordre)
    $recupDatas = mysqli_query($db,"SELECT * FROM themessages ORDER BY themessagesdate DESC, idthemessages DESC");

    // on transforme le résultat en tableau associatif
    $datas = mysqli_fetch_all($recupDatas,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil livre d'or</title>
</head>
<body>
    <h1>Accueil livre d'or</h1>
    <h3>ICI le formulaire</h3>
    <form name="livredor" method="post" action="">
    <input type="text" name="themessagesname" required placeholder="Votre Nom"><br>
    <textarea name="themessagestext" required placeholder="Votre message"></textarea><br>
    <input type="submit" value="Poster votre commentaire">
    <?php 
    if(isset($erreur)) echo $erreur;
    ?>
    </form>
    <h3>Vos messages</h3>
    <?php
foreach($datas as $item){
    echo "<h4>Ecrit par {$item['themessagesname']} Le {$item['themessagesdate']}</h4>";
    echo "<p>{$item['themessagestext']}</p>";
}
    ?>
</body>
</html>