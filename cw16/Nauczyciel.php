<?php
require_once 'Czlowiek.php';
require_once 'oplacany.php';

class Nauczyciel extends Czlowiek implements IOplacany {
    private $pensja;
    
    public function getPensja() {
        return $this->pensja;
    }

    public function setPensja($pensja) {
        $this->pensja = $pensja;
    }
    function __construct($pensja,$imie="Tymon",$nazwisko="Kopwalski",$wiek=20) {
        parent::__construct($imie, $nazwisko, $wiek);
        $this->pensja = $pensja;
    }
    public function toDiv() {
        return parent::toDiv(). "<div> Pensja: {$this->getPensja()   }</div>\n";
    }

}
