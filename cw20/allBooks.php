<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="cw20.css"/>
    </head>
    <body>
        <h1>Zestaw wypożyczonych książek</h1>
        <?php
        require_once 'functions.php';
        $dane = gettAllCzyt();
//        echo "<pre>";
//        print_r($dane);
//        echo "</pre>";
        echo czytToTable($dane);
        ?>
    </body>
</html>
