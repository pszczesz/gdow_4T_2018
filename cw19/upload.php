<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Odbieranie plików</title>
    </head>
    <body>
        <h1>Odbieranie plików</h1>

        <?php
//var_dump($_SERVER);
//echo __DIR__.'<br>';
//echo dirname(__FILE__);
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        echo $target_file;
        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
              echo "<pre>";
        var_dump($check);
        echo "</pre>";
            if ($check !== false) {
                echo "To jest obrazek - " . $check["mime"] . ".<br>";
                $uploadOk = 1;
            } else {
                echo "Plik nie jest obrazkiem<br>";
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Plik już istnieje<br>";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Plik za duży";
            $uploadOk = 0;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Tylko JPG, JPEG, PNG & GIF są dopuszczalne.<br>";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Błąd przy zapisywaniu pliku.<br>";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " został załadowany.<br>";
            } else {
                echo "Błąd przy zapisywaniu pliku.<br>";
            }
        }
        ?>
    </body>
</html>