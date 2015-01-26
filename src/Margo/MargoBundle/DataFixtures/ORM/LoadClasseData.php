<?php
namespace Margo\MargoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Margo\MargoBundle\Entity\Classe;

class LoadClasseData {
  public function load(ObjectManager $manager) {
    $classes = [
      [
        'name' => 'Administration système - 1ère année',
      ],
      [
        'name' => 'Administration système - 2ème année',
      ],
      [
        'name' => 'Développement Logiciel - 1ère année',
      ],
      [
        'name' => 'Développement Logiciel - 2ème année',
      ],
      [
        'name' => 'Management des Systèmes d\'Information - 1ère année',
      ],
      [
        'name' => 'Management des Systèmes d\'Information - 2ème année',
      ],
    ];
    foreach ($classes as $classData) {
      $class = new Classe();
      $class->setLibclasse($classData['libClasse'])
            ->setCodefiliere($classData['codeFiliere']);
      
      $manager->persist($class);
      $manager->flush();
    }
  }
   public function getOrder() {
    return 1;
  }
}
