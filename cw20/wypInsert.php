<?php

if(isset($_POST['imie'])){
    require_once 'functions.php';
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $ksiazkaId = $_POST['ksiazkaId'];
    $dataZwrotu = $_POST['data'];
    $conn = getConnection();
    if($conn!=null){
        $sql = "INSERT INTO czytelnicy"
                . " VALUES(null,'{$imie}','{$nazwisko}'"
                . ",{$ksiazkaId},'{$dataZwrotu}')";
        $result = $conn->query($sql);
        if($result){
            $sql2 = "UPDATE ksiazki SET stan=b'1' where id={$ksiazkaId}";
            $conn->query($sql2);
        }
        $conn->close();
    }
    header("Location: cw20.php");
}
