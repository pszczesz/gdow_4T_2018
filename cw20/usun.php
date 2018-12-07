<?php

if(isset($_GET['id'])){
    require_once 'functions.php';
    $id = $_GET['id'];
    echo $id;
    $ksiazkaid = getKsiazkaId($id);
    echo " ksiazkaid: ".$ksiazkaid;
    usunCzytelnik($id,$ksiazkaid);
    
}
 header("Location: cw20.php");