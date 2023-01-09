<?php

class Movie{
    public $nome;
    public $anno;

    function __construct($_anno) {
        $this->anno = $_anno;
    }
}

$inception = new Movie(2006);
$inception->nome = "Inception";
// $inception->anno = "2006";


$blood_diamond = new Movie (2000);
$blood_diamond->nome = "Blood diamond";
// $blood_diamond->anno = "2000";


var_dump($inception);