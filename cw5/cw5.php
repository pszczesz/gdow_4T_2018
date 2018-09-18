<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
            <?php
            $colors = array("biały", "żółty", "zielony","seledynowy");
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
            
            function SelectGen(array $dane){
                $html = "<select id='kol'>\n";
                foreach ($dane as $color) {
                    $html .= "<option value='{$color}'>{$color}</option>\n";
                }
                $html .= "</select>\n";
                return $html;
            }
            $colors2 = ["white"=>"biały","yellow"=>"żółty","grey"=>"szary",
                "red"=>"czerwony","blue"=>"niebieski"];
            function SelectGen2(array $dane){
                 $html = "<select id='kol2'>\n";
                foreach ($dane as $color=>$kolor) {
                    $html .= "<option value='{$color}'>{$kolor}</option>\n";
                }
                $html .= "</select>\n";
                return $html;
            }
            $colors2["black"]="czarny";
            $colors2[]="inny";
            echo SelectGen($colors);
            echo SelectGen2($colors2);
            ?>
        <script type="text/javascript">
          document.getElementById("kol2").onchange = function (){
              document.body.style.backgroundColor = this.value;
          };
        </script>
    </body>
        
</html>
