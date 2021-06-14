<?php
    require 'include/helpers.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Coleção de Helpers PHP" />
    <meta name="author" content="Renato Montanari" />

    <title>Coleção de Helpers PHP</title>
</head>
<body>
    <p>
    Exemplos:<br />    
    https://web.facebook.com/username<br />
    https://www.facebook.com/username<br />
    https://m.facebook.com/username<br />
    https://www.fb.com/username<br />
    https://www.fb.me/username<br />
    https://touch.facebook.com/username<br />
    </p>
    <?php
        echo fbUser('https://web.facebook.com/username');
        echo fbUser('https://www.facebook.com/username');
        echo fbUser('https://m.facebook.com/username');
        echo fbUser('https://www.fb.com/username');
        echo fbUser('https://www.fb.me/username');
        echo fbUser('https://touch.facebook.com/username');
    ?>
</body>
</html>