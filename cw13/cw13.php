<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            div.info{border: solid 1px orangered;color: orangered;
                     background-color: yellow;padding: 10px;margin: 20px;}
            table{border-collapse: collapse; width: 80%}
            td,th{border: solid 1px black;padding: 8px;}            
        </style>
    </head>
    <body>
        <?php
        require_once 'FileRepo.php';
        require_once 'BookToHTML.php';
        $repo = new FileRepo("dane.txt");
        $dane = $repo->getAll();//wywolanie metody dla obiektu $repo
        echo BookToHTML::ToTable($dane);//wywolana metoda statyczna klasy
        ?>
        <div>
            <a href="dodaj.php">Nowa książka</a>
        </div>
       
    </body>
</html>
