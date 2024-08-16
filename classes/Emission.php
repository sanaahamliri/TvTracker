<?php
require './Media.php';
require './Chaine.php';
require './Genre.php';

class Emission extends Media{

  private $durée;
  private $genre;

public function __construct($id, $titre, $description,$durée, Genre $genre){

   parent::__construct($id, $titre, $description);

   $this->durée = $durée;
   $this->genre = $genre;
    
}


public function SetDuree($durée){
    $this->durée = $durée ;
}


public function GetDuree(){
    return $this->durée;
}


public function SetGenre($genre){
    $this->genre = $genre ;
}


public function GetGenre(){
    return $this->genre;
}



    public function afficherDetails(){
        return " Les détails d'Emission \n titre:" . $this->GetTitre() . "\n description : " .$this->GetDescription() . "\n durée : " .$this->GetDuree() . "\n genre : " .$this->GetGenre() ;
    }


    public function AddChaine(){

    }

    public function EditDetails(){
        
    }

    public function DeleteChaine(){
        
    }

}

$test = new Emission(2,"sanaa", "hamliri", "1h 30min", "drama");

echo $test->afficherDetails();

