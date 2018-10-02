<?php
if(!isset($_POST['imie'])){ die("to nie submit!!");}
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$wiek = intval($_POST['wiek']);
if(trim($nazwisko)!='' && trim($imie)!='' && $wiek>0){
    $f = fopen("dane.txt", 'a');
    if($f){
        fwrite($f, $imie.'|'.$nazwisko.'|'.$wiek.PHP_EOL);
        fclose($f);
        header("Location: show.php");
    }
}else{
    header("Location: cw11.html");
}





