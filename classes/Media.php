<?php
abstract Class Media{
    
private $id;
private $titre;
private $description;



public function __construct($id, $titre, $description){
    $this->id = $id;
    $this->titre = $titre;
    $this->description = $description;
}

public function GetId(){
    return $this->id;
}

public function GetTitre(){
    return $this->titre;
}

public function SetTitre($titre){
    $this->titre = $titre;
}

public function GetDescription(){
    return $this->description;
}

public function SetDescription($description){
   $this->description = $description;
}


abstract public function afficherDetails();


}