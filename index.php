<?php
    class Movie {
        
        public $title;
        public $year;
        //messa privata per aver accessso sia in lettura che in scrittura 
        private $genre;
        public $director;
        public $dutation;
        public $description;
        public $availableForstreaming;

        public function __construct(
            //obbligatorie
            string $title,
            int $year,
            string $genre,
            //opzionali
            string $director = 'SCONOSCIUTO',
            int $dutation = 0,
            string $description = 'SCONOSCIUTO',
            bool $availableForstreaming = false
        )
        {
            //argomenti che possiamo mettere direttamente nel movie()
            $this->title = $title;
            $this->year = $year;
            //se passo un intero mi da errore
            $this->setGenre($genre);
            //valori default
            $this->dutation = $dutation;
            $this->availableForstreaming = $availableForstreaming;
            $this->director = $director;
            $this->description = $description;
        }


        //lettura
        public function getGenre()
        {
            return $this->genre;
        }
        
        public function setGenre($genre)
        {
            if(is_string($genre)){
                $this->genre = $genre;
            }
            else{
                echo '<h3>erroreeee</h3>';
            }
            
        }


    }
    //movie() pk stiamo richiamando un costruttore ---- il costruttore crea delle istanze
    $movieOne = new Movie('Barbie',2023, 'Comedy');
    //1 metedoto per passarre un valore 
    //$movieOne->title ='Barbie';
    //2 metodo per passare un valore con funzione annessa
    //$movieOne->setGenre('Comedy');

    var_dump($movieOne);
    //per redero disponibile all'esterno
    var_dump($movieOne->getGenre());
    
    $movieTwo = new Movie('Avatar',2022, 'Fantasy');
    //$movieTwo->title ='Avatar';
    //$movieTwo->setGenre('Fantasy');

    var_dump($movieTwo)
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        ciao
    </h1>
</body>
</html>