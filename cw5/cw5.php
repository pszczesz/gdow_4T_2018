<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            $colors = array("biały", "żółty", "zielony");
            $cars = ["fiat", "bmw", "renaut", "ford",[5,8,9]];
            print_r($cars);
            var_dump($colors);
            echo $cars[2];
            $cars[] = "nowy";
            $cars[4] = "na elemencie 4";
            $cars[22] = "element 22";
            print_r($cars);
          /*  for($i=0;$i<count($cars);$i++){
                echo $cars[$i]."<br>";
            }*/
            foreach ($cars as $item){
                echo $item.'<br>';
            }
            
            //todo
            echo SelectGen($colors);
            ?>
    </body>
        </pre>
</html>
