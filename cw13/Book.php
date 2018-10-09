<?php
class Book{
    private $title;
    private $author;
    private $pages;
    private $description;
    public function __construct($title="noname",$author="noname",$pages=100,
            $description="brak") {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        $this->description = $description;
    }
    public function __toString() {
        $html = "<div class='info'>\n";
        $html .= "Tytuł: {$this->title} autor: {$this->author}<br>\n";
        $html .= "Ilość stron: {$this->pages} opis: {$this->description}</div>\n";
        return $html;
    }
}
