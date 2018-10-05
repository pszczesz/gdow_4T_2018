<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 12</title>
    </head>
    <body>
        <h1>Wykorzystanie scandir</h1>
        <?php
        function ShowWithPre($dane,$r="p"){
            echo "<pre>";
            if($r=='p'){
                print_r($dane);
            }else{
                var_dump($dane);
            }
            echo '</pre>';
        }
        function FileInfo($filename){
            $html = "<li>";
            if(is_dir($filename)){
              $html .= " katalog";
          }else if(is_file($filename)){
              $html .= " plik";
              if(is_executable($filename)){
                  $html .= " wykonywalny";
              }
              $html .= " o rozmiarze: ".filesize($filename);
              $html .= " typ: ".filetype($filename);
          }else {
              $html .= " to nie plik";
          }
          $html .= "</li>";
          return $html;
        }
           $dir = 'pliki/';
          $files = scandir($dir);
          ShowWithPre($files);
          echo '<ul>';
          foreach ($files as $file) {
              echo FileInfo($dir.$file);              
          }
          echo "</ul>";
        ?>
    </body>
</html>
