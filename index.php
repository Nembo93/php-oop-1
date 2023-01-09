<?php

class Movie{
    public $nome;
    public $anno;
    public $top_rated = null;

    function __construct($_anno) {
        $this->anno = $_anno;
    }

    public function setVoto($voto){
        if ($voto > 4){
            $this->top_rated = true;
        } else {
            $this->top_rated = false;
        }
    }
    public function getVoto(){
        return $this->top_rated;
    }
}



$inception = new Movie(2006);
$inception->nome = "Inception";
$inception->setVoto(5);

$blood_diamond = new Movie (2000);
$blood_diamond->nome = "Blood diamond";
$blood_diamond->setVoto(4);


var_dump($inception);
var_dump($blood_diamond);