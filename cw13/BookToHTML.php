<?php

class BookToHTML{
    public static function ToTable(array $dane){
        $html = "<table>\n";
        $html .= "<tr><th>Lp</th><th>Tutuł</th>"
                . "<th>Autor</th><th>Strony</th>"
                . "<th>Opis</th></tr>\n";
        
        return $html;
    }
}

