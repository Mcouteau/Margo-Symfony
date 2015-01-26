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
        'email' => 'ncasgrain@yahoo.fr',
        'password' => 'etudiant',
        'adresse' => '28, rue Banaudon 69008 LYON',
        'situation' => 'Célibataire',
        'birthdate' => '12/21/1978'
      ],
      [
        'firstname' => 'Jérôme',
        'lastname' => 'Barteaux',
        'email' => 'jbart22@wanadoo.fr',
        'password' => 'etudiant',
        'adresse' => '74, rue Reine Elisabeth 06500 MENTON',
        'situation' => 'Célibataire',
        'birthdate' => '06/10/1984'
      ],
      [
        'firstname' => 'Gérard',
        'lastname' => 'Echeverri',
        'email' => 'ganglion@yopmail.com',
        'password' => 'etudiant',
        'adresse' => '22, Place du Jeu de Paume 94800 VILLEJUIF',
        'situation' => 'Célibataire',
        'birthdate' => '08/29/1975'
      ],
      [
        'firstname' => 'Thérèse',
        'lastname' => 'Bériault',
        'email' => 'lagrossetherese@free.fr',
        'password' => 'etudiant',
        'adresse' => '86, rue du Château 44800 SAINT-HERBLAIN',
        'situation' => 'Célibataire',
        'birthdate' => '06/02/1982'
      ],
      [
        'firstname' => 'Etoile',
        'lastname' => 'Desroches',
        'email' => 'etoiledesneiges@gmail.com',
        'password' => 'etudiant',
        'adresse' => '33, rue Bonneterie 13140 MIRAMAS',
        'situation' => 'Marié',
        'birthdate' => '07/15/1980'
      ],
      [
        'firstname' => 'Daniel',
        'lastname' => 'D\'Aubigné',
        'email' => 'jadorelechou@neuf.fr',
        'password' => 'etudiant',
        'adresse' => '6, rue Gouin de Beauchesne 97460 SAINT-PAUL',
        'situation' => 'Célibataire',
        'birthdate' => '01/21/1986'
      ],
      [
        'firstname' => 'Carole',
        'lastname' => 'LaCaille',
        'email' => 'caillecaille@numericable.fr',
        'password' => 'etudiant',
        'adresse' => '61, Rue St Ferréol 57050 METZ',
        'situation' => 'Célibataire',
        'birthdate' => '11/17/1985'
      ],
    ];
    foreach($etudiants as $etudiant) {
      $student = new Etudiant();
      $student->setPrenom($etudiant['firstname'])
              ->setNom($etudiant['lastname'])
              ->setEmail($etudiant['email'])
              ->setPassword($etudiant['password'])
              ->setSituation($etudiant['situation'])
              ->setBirthdate(new \DateTime($etudiant['birthdate']))
              ->setAdresse($etudiant['adresse']);
      
      $manager->persist($student);
      $manager->flush();
    }
  }
  public function getOrder() {
    return 1;
  }
}
