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
        'adresse' => '28, rue Banaudon 69008 LYON',
        'situation' => 'Célibataire',
      ],
      [
        'firstname' => 'Jérôme',
        'lastname' => 'Barteaux',
        'email' => 'jbart22@wanadoo.fr',
        'adresse' => '74, rue Reine Elisabeth 06500 MENTON',
        'situation' => 'Célibataire',
      ],
      [
        'firstname' => 'Gérard',
        'lastname' => 'Echeverri',
        'email' => 'ganglion@yopmail.com',
        'adresse' => '22, Place du Jeu de Paume 94800 VILLEJUIF',
        'situation' => 'Célibataire',
      ],
      [
        'firstname' => 'Thérèse',
        'lastname' => 'Bériault',
        'email' => 'lagrossetherese@free.fr',
        'adresse' => '86, rue du Château 44800 SAINT-HERBLAIN',
        'situation' => 'Célibataire',
      ],
      [
        'firstname' => 'Etoile',
        'lastname' => 'Desroches',
        'email' => 'etoiledesneiges@gmail.com',
        'adresse' => '33, rue Bonneterie 13140 MIRAMAS',
        'situation' => 'Marié',
      ],
      [
        'firstname' => 'Daniel',
        'lastname' => 'D\'Aubigné',
        'email' => 'jadorelechou@neuf.fr',
        'adresse' => '6, rue Gouin de Beauchesne 97460 SAINT-PAUL',
        'situation' => 'Célibataire',
      ],
      [
        'firstname' => 'Carole',
        'lastname' => 'LaCaille',
        'email' => 'caillecaille@numericable.fr',
        'adresse' => '61, Rue St Ferréol 57050 METZ',
        'situation' => 'Célibataire',
      ],
    ];
    foreach($etudiants as $etudiant) {
      $student = new Etudiant();
      $student->setPrenom($etudiant['firstname'])
              ->setNom($etudiant['lastname'])
              ->setEmail($etudiant['email'])
              ->setAdresse($etudiant['adresse']);
      
      $manager->persist($student);
      $manager->flush();
    }
  }
  public function getOrder() {
    return 1;
  }
}
