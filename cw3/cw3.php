<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Pętla for</h2>
        <?php
        echo "<ol>\n";
        for($i=1;$i<=10;$i++){
            echo "<li>Element listy: {$i}</li>\n";
        }
        echo '</ol>';
        for($i=1;$i<=6;$i++){
            echo "<h{$i}>Nagłówek {$i}</h{$i}>\n";
        }
        ?>
        <h2>Pętla while(...){...}</h2>
        <?php
        $suma = 0;
        const STALA = 100;
        while($suma<STALA){
            $losowa = rand(0, 10);
            $suma += $losowa; // $suma = $suma|+$losowa
            echo $losowa.' ';
        }
        echo "<p>suma = {$suma}</p>";   
        
        ?>
    </body>
</html>
