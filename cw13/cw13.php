<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            div.info{border: solid 1px orangered;color: orangered;
                     background-color: yellow;padding: 10px;margin: 20px;}
        </style>
    </head>
    <body>
        <?php
        require_once 'FileRepo.php';
        $repo = new FileRepo("dane.txt");
        $dane = $repo->getAll();
        echo "<pre>";
        print_r($dane);
        echo "</pre>";
        echo $dane[0];
        ?>
    </body>
</html>
