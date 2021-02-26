<?php
// première balise html - commentaire sur une ligne

$message = "Hello world";

$message2 = date("d/m/Y h:i:s");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $message;  ?></title>
</head>
<body>
<h1><?php echo $message;  ?></h1>
<h2>Nous sommes le <?php echo $message2 ?></h2>
    <!-- un commentaire HTML -->
</body>
</html>