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
        <p>
            <form method="post">
                <?php
                $szukane = isset($_POST['miejsce'])? trim($_POST['miejsce']) : "";
                ?>
                <label for="miejsce">Wybierz miejsce wycieczki: </label>
                <input type="text" id="miejsce" name="miejsce" 
                       value="<?php echo $szukane?>"/>
                <input type="submit" value="Szukaj"/>
            </form>
        </p>
        <?php
        require_once 'functions.php';
        if(isset($_POST['miejsce'])){
            $miejsce = trim($_POST['miejsce']);
        }else{
            $miejsce = "";
        }
      
        $dane =  getAllWycieczki($miejsce);
        $miejsca = getOnlyMiejsca();
      //  echo formWithSelect($miejsca);
        //print_r($miejsca);
        echo wycieczkiToTab($dane);
        ?>
        <div>
            <a href="dodajW.html">Dodaj nową wycieczkę</a>
        </div>
    </body>
</html>
