<?php
// tableau de données
$datas = [1,2,3,4,5,6,7,8,9,10];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>
<body>
    <h1>Les conditions</h1>
    <h3>Si - if</h3>
    <p>Exécute la condition si ce qui est entre parenthèse est juste</p>
    <p>Sinon (la condition n'est pas juste) on applique ce que l'on a dans le else</p>
    <h5>if($lulu == 5) { exécution du code entre accolade }</h5>
    <p>
    <?php
foreach($datas as $item){

    // si notre valeur vaut (==) 5
    if($item==5){
        // on le met en gras
        echo "<p><strong>$item</strong></p>";
    // sinon    
    }else{
        echo "<p>$item</p>";
    }

}
echo "<hr>";
?>

<h5>Affichage des nombres pairs</h5>

<?php
foreach($datas as $item){
    // si divisible par 2
    if(!($item % 2)){
        echo "<p>$item</p>";
    }
}
    ?>
    </p>
</body>
</html>