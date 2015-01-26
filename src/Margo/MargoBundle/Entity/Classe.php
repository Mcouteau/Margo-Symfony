<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 */
class Classe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $etudiants;

    /**
     * @var \Margo\MargoBundle\Entity\Filiere
     */
    private $filiere;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $intervenants;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etudiants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->intervenants = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Classe
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add etudiants
     *
     * @param \Margo\MargoBundle\Entity\Etudiant $etudiants
     * @return Classe
     */
    public function addEtudiant(\Margo\MargoBundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants[] = $etudiants;
    
        return $this;
    }

    /**
     * Remove etudiants
     *
     * @param \Margo\MargoBundle\Entity\Etudiant $etudiants
     */
    public function removeEtudiant(\Margo\MargoBundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants->removeElement($etudiants);
    }

    /**
     * Get etudiants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtudiants()
    {
        return $this->etudiants;
    }

    /**
     * Set filiere
     *
     * @param \Margo\MargoBundle\Entity\Filiere $filiere
     * @return Classe
     */
    public function setFiliere(\Margo\MargoBundle\Entity\Filiere $filiere = null)
    {
        $this->filiere = $filiere;
    
        return $this;
    }

    /**
     * Get filiere
     *
     * @return \Margo\MargoBundle\Entity\Filiere 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Add intervenants
     *
     * @param \Margo\MargoBundle\Entity\Intervenant $intervenants
     * @return Classe
     */
    public function addIntervenant(\Margo\MargoBundle\Entity\Intervenant $intervenants)
    {
        $this->intervenants[] = $intervenants;
    
        return $this;
    }

    /**
     * Remove intervenants
     *
     * @param \Margo\MargoBundle\Entity\Intervenant $intervenants
     */
    public function removeIntervenant(\Margo\MargoBundle\Entity\Intervenant $intervenants)
    {
        $this->intervenants->removeElement($intervenants);
    }

    /**
     * Get intervenants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIntervenants()
    {
        return $this->intervenants;
    }
}
