<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dane = file('dane.txt',FILE_IGNORE_NEW_LINES);
        //var_dump($dane);
        echo "<ul>\n";
        foreach ($dane as $line) {
            $wynik = explode('|', $line);
            echo "<li>{$wynik[0]} {$wynik[1]} wiek: {$wynik[2]} </li>\n";
        }
         echo "</ul>\n";
        ?>
        <div>
            <a href="cw11.html">Dodaj nowego klienta</a>
        </div>
    </body>
</html>
