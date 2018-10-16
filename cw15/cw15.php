<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST['sesja_start'])){
            echo "<p>Strat sesji...</p>";
            session_start();
            $_SESSION['nazwa'] = "moja sesja";
            $_SESSION['data'] = date("d-m-Y");
        }
        if(isset($_POST['sesja_stop'])){
            echo "<p>Zakończenie sesji...</p>";
            session_start();
            session_destroy();
        }
        ?>
        <form method="post">
            <input type="submit" value="Zacznij sesję"/>
            <input type="hidden" 
                   name="sesja_start" value="start"/>
        </form>
        <hr>
        <form method="post">
            <input type="submit" value="Koniec sesji"/>
            <input type="hidden" 
                   name="sesja_stop" value="stop"/>
        </form>
        <div><a href="strona2.php">Do innej strony</a></div>
    </body>
</html>
