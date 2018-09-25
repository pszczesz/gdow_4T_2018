<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>    
    <body>
        
        <?php
        if(!isset($_POST['imie'])){
            exit();
        }
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $klasa = $_POST['klasa'];
        $plec = $_POST['plec'];
        $zaint = isset($_POST['zaint'])? $_POST['zaint']:[];
        if(trim($imie)=='' || trim($nazwisko)==''){
            echo "<p>Brak poprawnych danych</p>\n";
            exit();
        }
        $html = "<h1>Informacje o rejestracji</h1>\n";
        $html .= "<p>Nazwisko: {$nazwisko}  "
                . "Imię: {$imie} Płeć: {$plec} "
                . "Klasa: {$klasa}</p>\n";
        if(count($zaint)>0){
            $html .= "<p>Twoje zainteresowania: "
                    .implode(', ', $zaint) . "</p>\n";
        } 
        echo $html;
        ?>
    
    </body>
</html>
