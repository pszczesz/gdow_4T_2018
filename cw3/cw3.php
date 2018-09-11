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
        <h2>Pętla do{....}while(...);</h2>
        <?php
        $losowa=0;
        $licznik=0;
        $suma=0;
        do{
           $losowa = rand(0, 50);
           echo $losowa.' '; 
           if($losowa!=0){
               $licznik++;
               $suma+=$losowa;               
           }
        }while($losowa!=0);
        echo "<p>Ilość losowań: {$licznik}</p>\n";
        echo "<p>Suma: {$suma}</p>\n";
        if($licznik!=0){
            echo "<p>Średnia: ".round($suma/$licznik,2)."</p>\n";
        }
        ?>
    </body>
</html>
