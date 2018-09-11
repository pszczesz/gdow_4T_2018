<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function lista($ilosc,$tresc,$rodzaj = "ol"){
            $html = "<{$rodzaj}>\n ";
            for($i=0;$i<$ilosc;$i++){
                 $html .= "\t<li>{$tresc}</li>\n";
            }
            return $html."</{$rodzaj}>\n";
        }
        function NWDIter($a,$b){
            while ($b!=0){
                $temp = $a;
                $a = $b;
                $b = $temp % $b;
            }
            return $a;
        }
        function NWDRek($a,$b){
            if($b==0){return $a;}
            return NWDRek($b, $a % $b);
        }
        ?>
        <h1>Funkcje w php</h1>
        <?php
         echo lista(5, "Superowa lista");         
          echo lista(8, "Jeszcze bardziej superowa lista","ol");          
          echo lista(4,"Inna lista","ul");
          $a=18;$b=24;
          echo "<p>NWD({$a},{$b}) = ". NWDIter($a, $b)."</p>\n";
           echo "<p>NWD({$a},{$b}) = ". NWDRek($a, $b)."</p>\n";
        ?>
    </body>
</html>
