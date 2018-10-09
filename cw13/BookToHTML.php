<?php

class BookToHTML {

    public static function ToTable(array $dane) {
        $html = "<table>\n";
        $html .= "<tr><th>Lp</th><th>Tutuł</th>"
                . "<th>Autor</th><th>Strony</th>"
                . "<th>Opis</th></tr>\n";
        $lp = 0;
        foreach ($dane as $b) {
            $html .= "<tr>\n"
                    . "<td>" . ( ++$lp) . "</td>"
                    . "<td>{$b->getTitle()}</td>"
                    . "<td>{$b->getAuthor()}</td>"
                    . "<td>{$b->getPages()}</td>"
                    . "<td>{$b->getDescription()}</td>"
                    . "</tr>\n";
        }
        return $html."</table>\n";
    }

}
