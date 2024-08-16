<?php
require '/Media.php';

class episode extends Media{


    private $durée;
    private $numéro;
    private $émission;

    public function __construct($durée, $numéro, $émission){
        $this->durée = $durée;
        $this->numéro = $numéro;
        $this->émission = $émission;
    }

    
    public function afficherDetails(){
        return "" ;
    }

    public function AddHoraireEmission(){

    }

    public function EditDetailsEmission(){
        
    }


}