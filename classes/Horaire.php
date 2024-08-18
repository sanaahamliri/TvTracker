<?php

class Horaire{
    private $date;
    private $heure;
    private $episode;


    public function __construct($date, $heure, episode $episode){
        $this->date = $date;
        $this->heure = $heure;
        $this->episode = $episode;
    }


public function GetDate(){
    return $this->date;
}

public function GetHeure(){
    return $this->heure;
}


public function SetDate($date){
    $this->date = $date;
}

public function SetHeure($heure){
   $this->heure = $heure;
}


    public function EditDetailsHoraire($date, $heure){

        $this->SetDate($date);
        $this->SetHeure($heure);
        
    }
}