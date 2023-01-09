<?php
// Definizione della classe dei film
class Movie{
    // Definizione degli attributi
    public $nome;
    public $anno;
    public $top_rated = null;

    // Definizione del costruttore (in fase di creazione dell'istanza/oggetto gli viene passato il valore dell'anno di uscita)
    function __construct($_anno) {
        $this->anno = $_anno;
    }

    // Definizione di un metodo (la funzione accetta come argomento il valore del voto che a seguito di un controllo stabilisce se il film è tra i più votati o no)
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


// Istanza/oggetto film Inception
$inception = new Movie(2006);
$inception->nome = "Inception";
$inception->setVoto(5);

// Istanza/oggetto film Blood diamond
$blood_diamond = new Movie (2000);
$blood_diamond->nome = "Blood diamond";
$blood_diamond->setVoto(4);


var_dump($inception);
var_dump($blood_diamond);