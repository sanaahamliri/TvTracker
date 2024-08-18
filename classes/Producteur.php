<?php

class Producteur{

    private $id;
    private $nom;
    private $description;
    private $émissionProposées = [];


    public function __construct($id, $nom, $description){
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }


    public function proposerEmission(Emission $emission) {
        $this->émissionProposées[] = $emission;
    }

    public function modifierDetails($nom, $description) {
        $this->nom = $nom;
        $this->description = $description;
    }

    public function afficherDetails() {
        echo "Producteur: {$this->nom} - Description: {$this->description}";
    }

}