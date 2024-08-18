<?php
include_once './Emission.php';
include_once './Horaire.php';



class episode extends Media
{

    private $durée;
    private $numéro;
    private $émission;
    private $horaires = [];

    public function __construct($id, $titre, $description, $durée, $numéro, Emission $émission)
    {
        parent::__construct($id, $titre, $description);
        $this->durée = $durée;
        $this->numéro = $numéro;
        $this->émission = $émission;
    }


    public function GetDurée()
    {
        return $this->durée;
    }

    public function GetNuméro()
    {
        return $this->numéro;
    }


    public function SetDurée($durée)
    {
        $this->durée = $durée;
    }

    public function SetNuméro($numéro)
    {
        $this->numéro = $numéro;
    }

    public function AddHoraireEmission(Horaire $horaire)
    {
        $this->horaires[] = $horaire;
    }


    public function afficherDetails()
    {
        echo "Épisode: {$this->GetTitre()} - Description: {$this->GetDescription()} - Numéro: {$this->numéro} - Durée: {$this->durée} - Emission: {$this->émission->GetTitre()} ";
        echo "Les horaires de diffusion : ";

        foreach ($this->horaires as $horaire) {
            echo "Le : " . $horaire->GetDate() . " à : " . $horaire->GetHeure() . " ";
        }
    }




    public function EditDetailsEpisode($titre, $description, $durée, $numéro,Emission $emission) {

        $this->SetTitre($titre);
        $this->SetDescription($description);
        $this->SetDurée($durée);
        $this->SetNuméro($numéro);
        $this->émission = $emission;


    }
}
