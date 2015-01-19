<?php
namespace Margo\MargoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Margo\MargoBundle\Entity\Etudiant;

class LoadEtudiantData implements FixtureInterface {
  public function load(ObjectManager $manager) {
    $etudiants = [
      [
        'firstname' => 'Nicolette',
        'lastname' => 'Casgrain',
        'adresse' => '28, rue Banaudon 69008 LYON',
        'situation' => 'Célibataire',
        'codeclasse' => 1,
        'idpers' => 1
      ],
      [
        'firstname' => 'Jérôme',
        'lastname' => 'Barteaux',
        'adresse' => '74, rue Reine Elisabeth 06500 MENTON',
        'situation' => 'Célibataire',
        'codeclasse' => 1,
        'idpers' => 2
      ],
      [
        'firstname' => 'Gérard',
        'lastname' => 'Echeverri',
        'adresse' => '22, Place du Jeu de Paume 94800 VILLEJUIF',
        'situation' => 'Célibataire',
        'codeclasse' => 1,
        'idpers' => 3
      ],
      [
        'firstname' => 'Thérèse',
        'lastname' => 'Bériault',
        'adresse' => '86, rue du Château 44800 SAINT-HERBLAIN',
        'situation' => 'Célibataire',
        'codeclasse' => 1,
        'idpers' => 4
      ],
      [
        'firstname' => 'Etoile',
        'lastname' => 'Desroches',
        'adresse' => '33, rue Bonneterie 13140 MIRAMAS',
        'situation' => 'Marié',
        'codeclasse' => 2,
        'idpers' => 5
      ],
      [
        'firstname' => 'Daniel',
        'lastname' => 'D\'Aubigné',
        'adresse' => '6, rue Gouin de Beauchesne 97460 SAINT-PAUL',
        'situation' => 'Célibataire',
        'codeclasse' => 2,
        'idpers' => 6
      ],
      [
        'firstname' => 'Carole',
        'lastname' => 'LaCaille',
        'adresse' => '61, Rue St Ferréol 57050 METZ',
        'situation' => 'Célibataire',
        'codeclasse' => 2,
        'idpers' => 7
      ],
    ];
    foreach($etudiants as $etudiant) {
      $student = new Etudiant();
      $student->setPrenom($etudiant['firstname'])
              ->setNom($etudiant['lastname'])
              ->setAdresse($etudiant['adresse'])
              ->setCodeclasse($etudiant['codeclasse'])
              ->setIdpers($etudiant['idpers']);
      
      $manager->persist($student);
      $manager->flush();
    }
  }
  public function getOrder() {
    return 1;
  }
}
