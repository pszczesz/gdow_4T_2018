<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $name = "ciasteczko1";
        $value = "wartość1";
        setcookie($name, $value, time() + (86400 * 30), "/");
        ?>
        
          <?php
        if(isset($_COOKIE[$name])){
            echo "<p>Ciasteczko: {$_COOKIE[$name]} ma wartość: {$_COOKIE[$name]}</p>\n";
        }else{
            echo "<p>Nie ustawiono ciasteczka</p>\n";
        }
        ?>
    </body>
</html>
