<?php
function getConnection(){
    $conn = new mysqli("localhost", "root2", "", "bib_4t_2018");
    if($conn->connect_errno!=0){
        return null;
    }
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAllBooks(){
    $conn = getConnection();
   // var_dump($conn);
    $dane = [];
    if($conn==null){
        return [];
    }
    $sql = "SELECT * FROM ksiazki ORDER BY tytul";
    $result = $conn->query($sql);
   // echo "result<br>";
   // var_dump($result);
    if($result){
        while($row = $result->fetch_assoc()){
            $dane[] = $row;
        }
    }
    $conn->close();
    return $dane;
}
function booksToTable(array $books){
    $html = "<table>";
    $html .= "<tr><th>Lp</th><th>Tytuł</th><th>Operacje</th></tr>";
    $lp = 0;
    foreach ($books as $book) {
        $wyr = $book['stan']==1? "class='wyp'" : "";
        $operacja =  $book['stan']==0 ? "<a href=wyp.php?id={$book['id']}>Wypożycz</a>": "";
        $html .= "<tr {$wyr}>"
              .'<td>'.(++$lp).'</td>'
              ."<td>{$book['tytul']}</td>"
              . "<td>{$operacja}</td></tr>";
    }
    return $html."</table>";
}
function getBookById($id){
    $conn = getConnection();
     if($conn==null){
        return [];
    }
    $dane = [];
    $sql = "SELECT * FROM ksiazki where id={$id}";
    //echo $sql;
    $result = $conn->query($sql);
   // var_dump($result);
    if($result){
        $dane = $result->fetch_assoc();
    }
    $conn->close();
    return $dane;
}

function gettAllCzyt(){
     $conn = getConnection();
   // var_dump($conn);
    $dane = [];
    if($conn==null){
        return [];
    }
    $sql = "SELECT imie,nazwisko,dataZwrotu,tytul FROM czytelnicy "
            . "INNER JOIN ksiazki on ksiazki.id=czytelnicy.ksiazkaid";
    $result = $conn->query($sql);
    $dane = [];
    if($result){
        while($row=$result->fetch_assoc()){
            $dane[] = $row;
        }
    }
    $conn->close();
    return $dane;
}
function czytToTable(array $dane){
     $html = "<table>";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th>"
            . "<th>Tytuł</th><th>Data zwrotu</th><th>Ilość dni</th></tr>";
    $lp = 0;
    foreach ($dane as $item) {
        $dnow = new DateTime();
        $dzwrotu = new DateTime($item['dataZwrotu']);
        $interval = $dzwrotu->diff($dnow);
        $iloscDni = $interval->days;
        $html .= "<tr>"
              .'<td>'.(++$lp).'</td>'
              ."<td>{$item['imie']}</td>"
              . "<td>{$item['nazwisko']}</td>"
              . "<td>{$item['tytul']}</td>"
              . "<td>{$item['dataZwrotu']}</td>"
              . "<td>{$iloscDni}</td></tr>";
    }
    return $html."</table>";
}