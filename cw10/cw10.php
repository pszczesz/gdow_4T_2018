<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 10 - pliki</title>
    </head>
    <body>
        <h1>Ćwiczenie 10 - pliki</h1>
        <?php
            $filename = "dane.txt";
            if(file_exists($filename)){
                $plik = fopen($filename, 'r');
                if(!$plik){die("Błąd otwarcia pliku!!!");}
                while(($line=fgets($plik))!=false){
                    echo "<p>{$line}</p>\n";
                }
                if(!feof($plik)){ echo "Bład odczytu pliku!!";}
                fclose($plik);
            }
            $text = ["Ala ma kota","Dawno temu gdzieś za lasem"
                ,"blblblblblbbl blblbbl"];
            $filename2 = "wynik.txt";
            $plik2 = fopen($filename2, 'a');
            foreach ($text as $line) {                
                fwrite($plik2, $line.PHP_EOL);
            }
            fclose($plik2);
        ?>
    </body>
</html>
