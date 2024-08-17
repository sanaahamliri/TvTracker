<?php
require './Emission.php';

$Comedy = new Genre(1,"Comique","Emissions comiques");
$Drama = new Genre(2,"Drama","Emissions De drama");

$OULA = new Chaine(1, "Al oula", "oulaDescription");
$Tania = new Chaine(2, "2M", "2MDescription");
$chaine =[$OULA, $Tania];
$EmissionOne = new Emission(1,"sanaa", "hamliri", "1h 30min", $Comedy);

$EmissionOne->AddChaine($OULA);
$EmissionOne->AddChaine($Tania);



$EmissionOne->EditDetails("test", "testtt", "2h", $Drama);


$EmissionOne->DeleteChaine($Tania);




echo $EmissionOne->afficherDetails();