<?php
// Definizione della classe dei film
class Movie{
    // Definizione degli attributi
    public $nome;
    public $anno;
    public $top_rated = "";

    // Definizione del costruttore (in fase di creazione dell'istanza/oggetto gli viene passato il valore dell'anno di uscita)
    function __construct($_anno) {
        $this->anno = $_anno;
    }

    // Definizione di un metodo (la funzione accetta come argomento il valore del voto che a seguito di un controllo stabilisce se il film è tra i più votati o no)
    public function setVoto($voto){
        if ($voto > 4){
            $this->top_rated = "Più Visti";
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
$inception->top_rated;

// Istanza/oggetto film Blood diamond
$blood_diamond = new Movie (2000);
$blood_diamond->nome = "Blood diamond";
$blood_diamond->setVoto(4);

var_dump($inception);
var_dump($blood_diamond);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Php-oop-1</title>
</head>
<body>

    <div class="title">
        <h1>Movies</h1>
    </div>
    
    <div class="container">

        <div class="card">
            <h2>
                <?php echo($inception->nome)?>
            </h2>
            <h3>
                <?php echo($inception->anno)?>
            <h3>
            <h4>
                <?php echo($inception->top_rated)?>
            <h4>
        </div>

        <div class="card">
            <h2>
                <?php echo($blood_diamond->nome)?>
            </h2>
            <h3>
                <?php echo($blood_diamond->anno)?>
            <h3>
            <h4>
                <?php echo($blood_diamond->top_rated)?>
            <h4>
        </div>

    </div>
    
</body>
</html>