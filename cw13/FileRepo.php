<?php
require_once 'Book.php';
class FileRepo{
    private $dane;
    public function __construct($filename="dane.txt") {
        $this->dane = $this->fillAll($filename);
    }
    public function fillAll($filename){
        $lines = file($filename,FILE_IGNORE_NEW_LINES);
        $dane = [];
        foreach ($lines as $line) {
            if(trim($line)!=''){
                $dane[] = $this->toBook($line);
            }
        }
        return $dane;
    }
    public function toBook($line){
        $temp = explode('|', $line);
        $book = new Book(trim($temp[0]), trim($temp[1]),
                trim($temp[2]), trim($temp[3]));
        return $book;        
    }
    public function getAll(){
        return $this->dane;
    }
}

