<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 2</title>
    </head>
    <body>
        <?php
        $zmienna = 12;
        $zmienna2 = 23.89;
        $imie = 'Alojzy';
        $decyzja = true;
        echo '<h2>Hello world</h2>';
        echo "<h3>Wartość zmiennej: {$zmienna}</h3>";
        echo '<h3>Wartość zmiennej: ' . $zmienna . '</h3>';

        var_dump($zmienna);
        var_dump($zmienna2);
        var_dump($imie);
        var_dump($decyzja);
        $a = 45;
        $b = 10;
        echo '<p>' . $a . ' + ' . $b . ' =  ' . ($a + $b) . '</p>';
        echo "<p>{$a} - {$b} =  " . ($a - $b) . '</p>';
        echo "<p>{$a} * {$b} =  " . ($a * $b) . '</p>';
        if ($b != 0) {
            echo "<p>{$a} / {$b} =  " . round($a / $b, 2) . '</p>';
        }else{
            echo "<p>{$a} / {$b} = BRAK WYNIKU </p>";
        }
        ?>
    </body>
</html>
