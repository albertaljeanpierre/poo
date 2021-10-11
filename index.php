<?php

require_once 'vendor/autoload.php';

use app\entity\Personne;
use app\manager\PersonneManager;
use Faker\Factory;

$personneManager = new PersonneManager();


$personnes = $personneManager->create(3); // tableau de personne

// var_dump($personnes);
echo "<table>";
echo "<tr><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Code Postal</th><th>Pays</th><th>Société</th></tr>";
foreach ( $personnes as $personne ) {
    // $personne = new Personne();
    echo "<tr>";
     echo "<td>" . $personne->getNom() . "</td>";
     echo "<td>" . $personne->getPrenom() . "</td>";
     echo "<td>" . $personne->getAdresse() . "</td>";
     echo "<td>" . $personne->getCodePostal() . "</td>";
     echo "<td>" . $personne->getPays() . "</td>";
     echo "<td>" . $personne->getSociete() . "</td>";
    echo "</tr>";
}
echo "</table>";





//echo "<hr>";
//echo $personne->name;
//echo "<hr>";
//echo $personne->name;
//echo "<hr>";
//echo $personne->name;
//echo "<hr>";
//echo $personne->name;
//echo "<hr>";
//echo $personne->name;
//echo "<hr>";







