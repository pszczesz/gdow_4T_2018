<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table{border-collapse:collapse;margin-left: 50px;}
            th,td{padding: 5px; border: solid 1px green;}
            th{background-color: #006666; color: #ccffcc;}
            td{color: black;}
            td.right{text-align: right;}
        </style>
    </head>
    <body>
        <?php
        $workers = [
            ["Jan", "Nowak", 4500], //0
            ["Anna", "Wanna", 3900], //1
            ["Monika", "Klika", 6900], //2
            ["Tomasz", "Bomasz", 4400]//3
        ];

        //TODO   $workers[1][0] ---> "Anna";
        function WorkersToTable(array $dane) {
            $html = "<table>\n";
            $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th>"
                    . "<th>Pensja</th></tr>\n";
            $i = 1;
            foreach ($dane as $row) {
                $html .= "<tr><td>{$i}</td><td>{$row[0]}</td>"
                        . "<td>{$row[1]}</td><td class='right'>{$row[2]}</td></tr>\n";
                $i++;
            }
            $html .= "</table>\n";
            return $html;
        }

        function WorkersToList(array $dane, $typListy = 'ol') {
            $html = "<{$typListy}>\n";
            foreach ($dane as $row) {
                $html .= "<li>{$row[0]} {$row[1]}</li>\n";
            }
            $html .= "</{$typListy}>\n";
            return $html;
        }

        echo WorkersToTable($workers);
        echo WorkersToList($workers, 'ul');
        ?>
    </body>
</html>
