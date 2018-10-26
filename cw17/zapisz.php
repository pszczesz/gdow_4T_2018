<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zapis na wycieczkę</title>
       
    </head>
    <body>
<?php
require_once 'functions.php';
if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $w = getWycieczka($id);
    echo "<h2>Zapis na wycieczkę</h2><p>"
    . "Miejsce: {$w['miejsce']}</p>"
    . "<p> cena: {$w['cena']} zł </p>"
    . "<p>ilość miesc: {$w['iloscMiejsc']}</p>\n";
}
?>
    </body>