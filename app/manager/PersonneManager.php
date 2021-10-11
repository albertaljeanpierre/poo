<?php


namespace app\manager;



use Faker\Factory;
use \app\entity\Personne;

class PersonneManager
{
    public function PersonneManager($nombre) {
        return PersonneManager::create($nombre);
    }
    public  function create($nombre) {
        $faker = Factory::create($nombre);

        $personnes = [];

        for ($i = 0 ; $i < $nombre ; $i++) {
            $personne = new Personne();
             $personne->setNom($faker->name);
            $personne->setPrenom($faker->firstName);
            $personne->setAdresse($faker->address);
            $personne->setCodePostal($faker->postcode);
            $personne->setPays($faker->country);
            $personne->setSociete($faker->company);
            array_push($personnes, $personne);
        }
        return $personnes;
    }
}