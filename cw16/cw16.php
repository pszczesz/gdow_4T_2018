<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 16 - dziedziczenie w php</title>
    </head>
    <body>
        <h1>Ćwiczenie 16 - dziedziczenie w php</h1>
        <?php
        require_once 'Uczen.php';
        require_once 'Nauczyciel.php';
        $oceny = ["język polski"=>[3,5,4,4.5],
                  "matematyka"=>[2,1,3,4,1],
                  "fizyka"=>[4,5,3,1],
                  "wf"=>[6,6,6,5,3]
                 ];
        $u = new Uczen($oceny,"Roman","Bolek",17);
        echo $u->toDiv();
        $n = new Nauczyciel(3500, "Roman", "Polański", 67);
        echo $n->toDiv();
        ?>
    </body>
</html>
