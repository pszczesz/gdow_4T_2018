<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formularze - Wstęp</title>
    </head>
    <body>
        <h1>Formularze - Wstęp</h1>
        <form method="post">
            <fieldset>
                <label for="a">Poda a</label>
                <input type="number" id="a" name="a"/><br>
                <label for="b">Poda b</label>
                <input type="number" id="b" name="b"/><br>
                <input type="submit" value="Wyślij"/>
            </fieldset>
        </form>
        <?php
        if(isset($_POST['a']) && isset($_POST['b'])){
            var_dump($_POST);
            $a = $_POST['a'];
            $b = $_POST['b'];
            echo "<p>{$a} + {$b} = " . ($a + $b) . "</p>\n";
        }
        
        ?>
    </body>
</html>
