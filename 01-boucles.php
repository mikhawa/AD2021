<?php
// une boucle permet de répéter le code autant de X que désiré
$contenu = ["Bonjour les amis","un","deux","trois","quatre","cinq","six"]; // tableau (variable qui contient plusieurs valeurs)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach($contenu as $item){
        echo "<p>$item</p><hr>";
    }
    ?>
</body>
</html>