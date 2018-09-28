<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table{border-collapse: collapse;margin-left: 50px;}
            th,td{ border: solid 1px grey;}
            th{padding: 5px;background-color: bisque;}
            td{padding: 5px;}
            a.nag{display: inline-block;text-decoration: none;
                    color: goldenrod;}
        </style>
    </head>
    <body>
        <?php
        require_once 'dane.php'; 
        $dane = GetColors();
        if(isset($_GET['s'])){
            $sort = $_GET['s'];
            if($sort=='pl'){
                asort($dane);
            }else{
                ksort($dane);
            }
        }       
        echo ToTable($dane);
        ?>
    </body>
</html>
