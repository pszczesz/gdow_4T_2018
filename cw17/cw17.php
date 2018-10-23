<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 17 - wycieczki</title>
        <style>
            table{border-collapse: collapse; margin-left: 100px;width: 60%;}
            td,th{border: solid 1px black; padding: 5px;}
            th{color: #3333ff; background-color: #ccccff;}
            .right{text-align: right;}
        </style>
    </head>
    <body>
        <h1>Ćwiczenie 17 - wycieczki</h1>
        <?php
        require_once 'functions.php';
       // $conn = getConnection();
        $dane =  getAllWycieczki();
//        echo "<pre>";
//        print_r($dane);
//        echo "</pre>";
        echo wycieczkiToTab($dane);
        ?>
        <div>
            <a href="dodajW.html">Dodaj nową wycieczkę</a>
        </div>
    </body>
</html>
