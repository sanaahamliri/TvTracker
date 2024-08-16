<?php

class Producteur{

    private $id;
    private $nom;
    private $description;
    private $émissionProposées;


    public function __construct($id, $nom, $description, $émissionProposées){
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->émissionProposées = $émissionProposées;
    }


    public function AddEmission(){

    }

    public function EditDetailsEmission(){
        
    }

}