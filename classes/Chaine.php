<?php

class Chaine
{
    private $id;
    private $nom;
    private $description;


    public function __construct($id, $nom, $description)
    {

        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }


    public function GetId()
    {
        return $this->id;
    }


    public function GetName()
    {
        return $this->nom;
    }

    public function SetName($nom)
    {
        $this->nom = $nom;
    }

    public function GetDescription()
    {
        return $this->description;
    }

    public function SetDescription($description)
    {
        $this->description = $description;
    }



    public function EditDetailsChaine($Newnom, $Newdescription)
    {

        if (empty($Newnom) && empty($Newdescription)) {
            echo "nom et description sont obligatoire à entrer";
        } else {

            $this->SetName($Newnom);
            $this->SetDescription($Newdescription);
        }
    }

    
}
