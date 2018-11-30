<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <style>
            label{display: inline-block; width: 120px; text-align:
                      right;padding-left: 5px;}
            div.line{margin: 10px;}
            span.wyr{
                font-weight: bold;
                color: green;
            }
        </style>
    </head>
    <body>
        <?php
        if(isset($_GET['id'])){
           // echo "<p>Wypożyczanie książki o id={$_GET['id']}</p>";
            $id = intval($_GET['id']);
           require_once 'functions.php';
           $book = getBookById($id);
           $d = date('Y-m-d');
          // $now = date
           $date = date('Y-m-d', strtotime($d. ' + 14 days'));
           ?>
           
        <div>
            <form method="post" action="wypInsert.php">
                 <fieldset>
                     <legend>Wypożyczanie książki <span class="wyr">"<?php echo $book['tytul']?>"</span></legend>
                    <div class="line">
                    <label for="imie">Imię</label>
                    <input type="text" id="imie" name="imie"/>
                </div>
                <div class="line">
                    <label for="nazwisko">Nazwisko</label>
                    <input type="text" id="nazwisko" name="nazwisko"/>
                </div>
                <div class="line">
                    <label for="data">Data Zwrotu</label>
                    <input type="date" id="data" name="data" value="<?php echo $date?>"/>
                </div>
                    <input type="hidden" value="<?php echo $book['id']?>" name="ksiazkaId" id="ksiazkaId"/>
               
                <input type="submit" value="Wypożycz"/>
                </fieldset>
            </form>
        </div>
        
        <?php
        }   
        
        ?>
        
    </body>
</html>
