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
    $sql = "SELECT czytelnicy.id,imie,nazwisko,dataZwrotu,tytul,"
            . "DATEDIFF(dataZwrotu,now()) as dni FROM czytelnicy "
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
            . "<th>Tytuł</th><th>Data zwrotu</th><th>Ilość dni</th>"
            . "<th>Ilość dni SQL</th><th></t></tr>";
    $lp = 0;
    foreach ($dane as $item) {
        $wyr = $item['dni']<=0 ? "class='wyp'" : "";
        $dnow = new DateTime();
        $dzwrotu = new DateTime($item['dataZwrotu']);
        $interval = $dzwrotu->diff($dnow);
        $iloscDni = $interval->days;
        $html .= "<tr {$wyr}>"
              .'<td>'.(++$lp).'</td>'
              ."<td>{$item['imie']}</td>"
              . "<td>{$item['nazwisko']}</td>"
              . "<td>{$item['tytul']}</td>"
              . "<td>{$item['dataZwrotu']}</td>"
              . "<td>{$iloscDni}</td>"
              . "<td>{$item['dni']}</td>"
              . "<td><a href='usun.php?id={$item['id']}'>Oddaj</a></td></tr>";
    }
    return $html."</table>";
}
function usunCzytelnik($id,$ksiazkaid){
    $conn = getConnection();
    if($conn==null)       { return ;}
    $sql1 = "DELETE FROM czytelnicy WHERE id={$id}";
    $sql2 = "UPDATE ksiazki SET stan=b'0' where id={$ksiazkaid}";
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    //var_dump($result1);
   // var_dump($result2);
   $conn->close();
}
function getKsiazkaId($id){
    $conn = getConnection();
    if($conn==null)       { return ;}
    $sql = "SELECT ksiazkaid from czytelnicy WHERE id={$id}";
    $result=$conn->query($sql);
    $ksiazkaid = $result->fetch_assoc()['ksiazkaid'];
    $conn->close();
    return $ksiazkaid;
}