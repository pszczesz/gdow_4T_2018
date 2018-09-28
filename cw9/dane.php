<?php
function GetColors(){
    return [
        "white"=>"biały",
        "yellow"=>"żółty",
        "blue"=>"niebieski",
        "purple"=>"fioletowy",
        "grey"=>"szary",
        "black"=>"czarny",
        "green"=>"zielony"
    ];
}
function ToTable(array $colors){
    $html = "<table>\n";
    $html .= "<tr><th><a class='nag' href='cw9.php?s=ang'>angielskie</a></th>"
            . "<th><a class='nag' href='cw9.php?s=pl'>polskie</a></th></tr>\n";
    foreach ($colors as $ang => $pol) {
        $html .= "\t<tr><td>{$ang}</td><td>{$pol}</td></tr>\n";
    }
    $html .= "</table>\n";
    return $html;
}

