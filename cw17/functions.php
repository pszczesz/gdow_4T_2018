<?php
function getConnection(){
    $conn = new mysqli("localhost", "root", "", "4ti_2018_biuro");
    if($conn->connect_errno!=0){
        echo "error: ".$conn->connect_error;
       // die("error");
       return null;
    }
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAllWycieczki(){
    $conn = getConnection();
    $dane = [];
    if($conn==null){
        return $dane;
    }
    $sql = "SELECT * FROM wycieczki";
    $result = $conn->query($sql);
    //var_dump($result);
    while ($row=$result->fetch_assoc()){
        $dane[] = $row;
    }
    $conn->close();
    return $dane;
}
function wycieczkiToTab(array $dane){
    $html = "<table>\n";
    $html .= "<tr><th>Lp</th><th>Miejsce</th>"
            . "<th>Cena</th><th>Ilość miejsc</th>"
            . "<th>Data</th><th>Operacje</th></tr>\n";
    $lp=0;
    foreach ($dane as $row) {
        $html .= "<tr><td>". (++$lp)."</td>"
                . "<td>{$row['miejsce']}</td><td class='right'>{$row['cena']}</td>"
                . "<td class='right'>{$row['iloscMiejsc']}</td><td class='right'>{$row['data']}</td>"
                . "<td><a href='zapisz.php?id={$row['id']}'>Wybierz</a>"
                . " <a href='usun.php?id={$row['id']}'>Usuń</a></td></tr>\n";
    }
    return $html."</table>";
}

function insertWycieczka(array $dane){
     $conn = getConnection();
    
    if($conn==null){
        return false;
    }
    $sql = "INSERT INTO wycieczki(miejsce,cena,iloscMiejsc,data) "
            . "VALUES('{$dane[0]}',{$dane[1]},{$dane[2]},'{$dane[3]}')";
    echo $sql;        
    $result = $conn->query($sql);
    return $result;
}
function deleteWycieczka($id){
     $conn = getConnection();
    if($conn==null){        
        return false;
    }
    $id= intval($_GET['id']);
    $sql1 = "SELECT count(*) FROM uczestnicy where wycieczkaid={$id}";
    $result = $conn->query($sql1);
    $row  = $result->fetch_row();
    if($row[0]==0){
        $conn->query("DELETE FROM wycieczki WHERE id={$id}");
    }
    $conn->close();
    return true;
}
function getWycieczka($id){
     $conn = getConnection();
    if($conn==null){        
        return false;
    }
    $sql = "SELECT * FROM wycieczki where id={$id}";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}
