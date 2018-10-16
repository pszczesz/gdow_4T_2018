<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        print_r($_SESSION);
        echo session_id();
        ?>
    </body>
</html>
