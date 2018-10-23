<?php
require_once 'functions.php';

if(isset($_POST['miejsce'])){
    $miejsce = trim($_POST['miejsce']);    
    $cena = floatval($_POST['cena']);
    $data = $_POST['data'];
    $iloscMiejsc = intval($_POST['ilMiejsc']);
    if($miejsce!='' && $cena>0 && $iloscMiejsc>0){
        insertWycieczka([$miejsce,$cena,$iloscMiejsc,$data]);
    }else{
        echo "error";
    }
}

