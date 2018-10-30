<?php

require_once 'functions.php';
if(isset($_POST['imie'])){
    $conn = getConnection();
    if($conn==null){
        die("Error DB");
    }
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $wycieczkaid = intval($_POST['wycieczkaid']);
    $iloscMiejsc = intval($_POST['iloscMiejsc']);
    print_r($_POST);
    if($imie=="" || $nazwisko=="" || $wycieczkaid==0){
        die("Error validacji");
    }else{
        $sql1 = "INSERT INTO uczestnicy(imie,nazwisko,wycieczkaid)"
            . " VALUES('{$imie}','{$nazwisko}',{$wycieczkaid})";
       $sql2 = "UPDATE wycieczki SET iloscMiejsc=".($iloscMiejsc-1)
               ." WHERE id={$wycieczkaid}";
      // echo $sql1."<br>";  
      // echo $sql2."<br>"; 
      $conn->query($sql1);
      $conn->query($sql2);
      header("Location: cw17.php");
    }
    
    
}
