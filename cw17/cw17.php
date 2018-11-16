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
            $szukane = isset($_POST['miejsce']) ? trim($_POST['miejsce']) : "";
            ?>
            <label for="miejsce">Wybierz miejsce wycieczki: </label>
            <input type="text" id="miejsce" name="miejsce" 
                   value="<?php echo $szukane; ?>"/>
            <input type="submit" value="Szukaj"/>
        </form>
    </p>
    <?php
    require_once 'functions.php';
    if (isset($_POST['miejsce'])) {
        $miejsce = trim($_POST['miejsce']);
    } else {
        $miejsce = "";
    }
    if (isset($_POST['selMiejsca'])) {
        $miejsce2 = trim($_POST['selMiejsca']);
    } else {
        $miejsce2 = "";
    }

    $dane = getAllWycieczki($miejsce);
    $dane2 = getAllWycieczki($miejsce2);
    $miejsca = getOnlyMiejsca();

    //print_r($miejsca);
    echo wycieczkiToTab($dane);
    echo "<p>Dla selecta tabelka</p>\n";
    echo formWithSelect($miejsca);
    echo wycieczkiToTab($dane2);
    ?>
    <div>
        <a href="dodajW.html">Dodaj nową wycieczkę</a>
    </div>
    <script type="text/javascript">
        document.querySelector("#selMiejsca").value = "<?php echo $miejsce2; ?>";
        document.querySelector("#selMiejsca").onchange = function () {
            document.querySelector("#selForm").submit();
        };
        setInterval(function () {
            let red = Math.floor(Math.random() * 256);
            let green = Math.floor(Math.random() * 256);
            let blue = Math.floor(Math.random() * 256);
            let color = "rgb(" + red + "," + green + "," + blue + ")";           
            document.querySelector("h1").style.color = color;
        }, 2000);

    </script>
</body>
</html>
