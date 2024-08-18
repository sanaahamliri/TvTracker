<?php
require './Emission.php';
require './Episode.php';


$Comedy = new Genre(1,"Comique","Emissions comiques");
$Drama = new Genre(2,"Drama","Emissions De drama");

$OULA = new Chaine(1, "Al oula", "oulaDescription");
$Tania = new Chaine(2, "2M", "2MDescription");
$chaine =[$OULA, $Tania];
$EmissionOne = new Emission(1,"sanaa", "hamliri", "1h 30min", $Comedy);

$EmissionOne->AddChaine($OULA);
$EmissionOne->AddChaine($Tania);

// echo $EmissionOne->afficherDetails();

// $EmissionOne->EditDetails("test", "testtt", "2h", $Drama);


// $EmissionOne->DeleteChaine($Tania);


$episode1 = new episode(1, "ep1", "azerty", "3h", "1", $EmissionOne);
$horaire = new horaire("20 Mai", "8 pm", $episode1);
$horaire-> EditDetailsHoraire("01/01", "6am");
$episode1->AddHoraireEmission($horaire);

$episode1->EditDetailsEpisode("ep2", "ep2 description", "25min", "2", $EmissionOne);

echo $episode1->afficherDetails();


// echo $EmissionOne->afficherDetails();