<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zapis na wycieczkę</title>
       <style>
            label{display: inline-block; width: 120px; text-align:
                      right;padding-left: 5px;}
            div.line{margin: 10px;}
        </style>
    </head>
    <body>
<?php
require_once 'functions.php';
if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $w = getWycieczka($id);
    $iloscMiejsc = intval($w['iloscMiejsc']);
    echo "<h2>Zapis na wycieczkę</h2><p>"
    . "Miejsce: {$w['miejsce']}</p>"
    . "<p> cena: {$w['cena']} zł </p>"
    . "<p>ilość miesc: {$w['iloscMiejsc']}</p>\n";
    
    //echo<<<TEXT
    ?>
    <div>
            <form action="dodajUczestnika.php" method="post">
                <fieldset>
                    <legend>Nowy uczesnik wycieczki</legend>
                    <div class="line">
                        <label for="imie">Podaj imię</label>
                        <input type="text" name="imie" id="imie"/>
                        <span class="error"></span>
                    </div>
                    <div class="line">
                        <label for="nazwisko">Podaj nazwisko</label>
                        <input type="text" name="nazwisko" id="nazwisko"/>
                        <span class="error"></span>
                        <input type="hidden" name="wycieczkaid"
                               value="<?php echo $id?>"/>
                        <input type="hidden" name="iloscMiejsc"
                               value="<?php echo $iloscMiejsc?>"/>
                    </div>
                    <input type="submit" value="Zapisz na wycieczkę">
                </fieldset>
            </form></div>
<?php
    
}else{
   // echo<<<TEXT
    ?>
    
     <div>
            Brak zapisów na wycieczkę
            <a href="cw17.php">Powrót do listy wycieczek</a>
        </div>  
        <?php
//TEXT;
    
}
?>
       
        
    </body>