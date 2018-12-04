<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Wypożyczalnia książek</title>
        <link rel="stylesheet" href="cw20.css"/>
    </head>
    <body>
        <h1>Wypożyczalnia</h1>
        <h3>Zbiór książek</h3>
        <?php
         require_once 'functions.php';
         $dane = getAllBooks();
         echo booksToTable($dane);
        ?>
        <div>
            <a href="allBooks.php">Wyświetl wypożyczenia</a>
        </div>
    </body>
</html>
