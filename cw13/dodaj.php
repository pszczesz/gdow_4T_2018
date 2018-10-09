<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .line{margin: 10px;}
            label{display: inline-block;width: 150px; text-align: right;}
        </style>
    </head>
    <body>
        <?php
        require_once 'BookToHTML.php';
        echo BookToHTML::BookToForm();
        ?>
    </body>
</html>
