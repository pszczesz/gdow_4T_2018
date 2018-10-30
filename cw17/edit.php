<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'functions.php';
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $w = getWycieczka($id);
            $iloscMiejsc = intval($w['iloscMiejsc']);
            echo "<h1>Szczegóły wycieczki</h1><p>"
            . "Miejsce: {$w['miejsce']}</p>"
            . "<p> cena: {$w['cena']} zł </p>"
            . "<p>ilość miesc: {$w['iloscMiejsc']}</p>\n";
          echo "<h2>Lista uczestników</h2>\n";  
            $dane =  getAllUczestnicy($id);
            echo uczestnicyToList($dane);
        }
        ?>
    </body>
</html>
