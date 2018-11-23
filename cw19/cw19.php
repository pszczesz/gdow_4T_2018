<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Wysyłanie plików</title>
    </head>
    <body>
        <h1>Wysyłanie plików</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Wybierz obrazek do załadowania:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Załaduj obrazek" name="submit">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
