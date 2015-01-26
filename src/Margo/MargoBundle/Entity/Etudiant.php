<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 */
class Etudiant extends Personne
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var \Margo\MargoBundle\Entity\Classe
     */
    private $classe;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Etudiant
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    
        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set classe
     *
     * @param \Margo\MargoBundle\Entity\Classe $classe
     * @return Etudiant
     */
    public function setClasse(\Margo\MargoBundle\Entity\Classe $classe = null)
    {
        $this->classe = $classe;
    
        return $this;
    }

    /**
     * Get classe
     *
     * @return \Margo\MargoBundle\Entity\Classe 
     */
    public function getClasse()
    {
        return $this->classe;
    }
}
