<?php

if(isset($_GET['id'])){
    require_once 'functions.php';
    $id = $_GET['id'];
    echo $id;
    $ksiazkaid = getKsiazkaId($id);
    usunCzytelnik($id,$ksiazkaid);
    
}
 header("Location allBooks.php");