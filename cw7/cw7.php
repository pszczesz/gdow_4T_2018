<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formularze - Wstęp</title>
    </head>
    <body>
        <h1>Formularze - Wstęp</h1>
        <form>
            <fieldset>
                <label for="a">Poda a</label>
                <input type="number" id="a" name="a"/><br>
                <label for="b">Poda b</label>
                <input type="number" id="b" name="b"/><br>
                <input type="submit" value="Wyślij"/>
            </fieldset>
        </form>
        <?php
        if(isset($_GET['a']) && isset($_GET['b'])){
          //  var_dump($_GET);
            $a = $_GET['a'];
            $b = $_GET['b'];
            echo "<p>{$a} + {$b} = " . ($a + $b) . "</p>\n";
        }
        
        ?>
    </body>
</html>
