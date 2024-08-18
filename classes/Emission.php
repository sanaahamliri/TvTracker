<?php
include_once './Media.php';
include_once './Chaine.php';
include_once './Genre.php';

class Emission extends Media
{

    private $durée;
    private $genre;
    private $chaines = [];

    public function __construct($id, $titre, $description, $durée, Genre $genre)
    {

        parent::__construct($id, $titre, $description);

        $this->durée = $durée;
        $this->genre = $genre;
    }


    public function SetDuree($durée)
    {
        $this->durée = $durée;
    }


    public function GetDuree()
    {
        return $this->durée;
    }


    public function AddChaine(Chaine $chaine)
    {

        $this->chaines[] = $chaine;
    }

    public function afficherDetails()
    {
        echo " Les détails d'Emission : <br>  titre:" . $this->GetTitre() . "<br>  description : " . $this->GetDescription() . "<br>  durée : " . $this->GetDuree() . "<br> \t genre : " . $this->genre->getGenreName();
        echo "<br> chaines associes :";
        foreach ($this->chaines as $chaine) {
            echo "  " . $chaine->GetName();
        }
    }


    public function EditDetails($titre, $description, $durée, Genre $Newgenre)
    {
        $this->SetTitre($titre);
        $this->SetDescription($description);
        $this->SetDuree($durée);
        $this->genre = $Newgenre;
    }

    public function DeleteChaine(Chaine $chaine)
    {

    
       $Exist = array_search($chaine,$this->chaines);
       
        if($Exist){
            unset($this->chaines[$Exist]);
        }
        
    }
}
