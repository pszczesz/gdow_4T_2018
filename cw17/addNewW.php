<?php
require_once 'functions.php';

if(isset($_POST['miejsce'])){
    $miejsce = trim($_POST['miejsce']);    
    $cena = floatval($_POST['cena']);
    $data = $_POST['data'];
    $iloscMiejsc = intval($_POST['ilMiejsc']);
    if($miejsce!='' && $cena>0 && $iloscMiejsc>0){
        if(insertWycieczka([$miejsce,$cena,$iloscMiejsc,$data])){
            header("Location: cw17.php");
        }else{
        header("Location: dodajW.html");
        }
    }else{
        echo "error";
        header("Location: dodajW.html");
    }
   
}

