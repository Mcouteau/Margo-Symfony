<?php
namespace Margo\MargoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Margo\MargoBundle\Entity\Classe;

class LoadClasseData {
  public function load(ObjectManager $manager) {
    $classes = [
      [
        'libClasse' => 'Administration système - 1ère année',
        'codeFiliere' => 'AS',
      ],
      [
        'libClasse' => 'Administration système - 2ème année',
        'codeFiliere' => 'AS',
      ],
      [
        'libClasse' => 'Développement Logiciel - 1ère année',
        'codeFiliere' => 'DEV',
      ],
      [
        'libClasse' => 'Développement Logiciel - 2ème année',
        'codeFiliere' => 'DEV',
      ],
      [
        'libClasse' => 'Management des Systèmes d\'Information - 1ère année',
        'codeFiliere' => 'MSI',
      ],
      [
        'libClasse' => 'Management des Systèmes d\'Information - 2ème année',
        'codeFiliere' => 'MSI',
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
