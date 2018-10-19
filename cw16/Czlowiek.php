<?php

class Czlowiek{
    protected $imie;
    protected $nazwisko;
    protected $wiek;
    public function __construct($imie="Adam", $nazwisko="Nowak", $wiek=20) {
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->wiek = $wiek;
    }
    public function toDiv(){
        return "<div class='info'> {$this->imie} {$this->nazwisko}"
        . " wiek:{$this->wiek}</div>";        
    }
}

