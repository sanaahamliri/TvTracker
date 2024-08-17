<?php


class Genre{

    private $id;
    private $nom;
    private $description;


    public function __construct($id, $nom, $description){

                $this->id = $id;
                $this->nom = $nom;
                $this->description = $description;
    }

    
public function getGenreName(){
    return $this->nom;
}

public function getGenreDescription(){
    return $this->description;
}


   
public function setGenreName($nom){
    $this->nom = $nom;
}

public function setGenreDescription($description){
    $this->description = $description;
}


public function EditGenre($NewnameGenre, $NewdescriptionGenre)
{
        $this->setGenreName($NewnameGenre);
        $this-> setGenreDescription($NewdescriptionGenre);
}

}