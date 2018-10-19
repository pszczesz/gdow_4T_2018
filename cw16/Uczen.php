<?php
require_once 'Czlowiek.php';

class Uczen extends Czlowiek {
    private $oceny;
    
    public function __construct($oceny,$imie="Tymon",$nazwisko="Kopwalski",$wiek=20) {
        parent::__construct($imie, $nazwisko, $wiek);
        $this->oceny = $oceny;
    }
    public function toDiv() {
        $html = parent::toDiv();
        $html .= "<ul>\n";
        foreach ($this->oceny as $przedmiot=>$oc){
        //     echo "<pre>";print_r($oc);echo "</pre>";
            $html .= "<li>{$przedmiot}: ".$this->getOceny($oc)."</li>\n";
        }
        return $html."</ul>";
    }
    private function getOceny(array $przedmiot){
        $html = "<span>Oceny: ";
        foreach ($przedmiot as $ocena) {
            $html .= $ocena.' ';
        }
        return $html.'</span>'."\n";
    }
}
