<?php
require_once 'functions.php';
if(isset($_GET['id'])){
    deleteWycieczka($id);
}
header("Location: cw17.php");

