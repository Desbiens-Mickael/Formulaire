<?php


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
    <p>Merci <?= $_POST["user_prénom"] . " " . $_POST["user_name"] ?> de nous avoir contacté à propos de “<?= $_POST["user_thém"] ?>”<div class="br"></div>

Un de nos conseiller vous contactera soit à l’adresse <?= $_POST["user_email"] ?> <br><br> 

ou par téléphone au <?= $_POST["user_tel"] ?> dans les plus brefs délais pour traiter votre demande : 

<?= $_POST["user_message"] ?></p>
</body>
</html>