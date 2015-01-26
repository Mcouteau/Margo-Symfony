<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 */
class Filiere
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
    private $classes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $intervenants;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $matieres;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->intervenants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->matieres = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Filiere
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
     * Add classes
     *
     * @param \Margo\MargoBundle\Entity\Classe $classes
     * @return Filiere
     */
    public function addClass(\Margo\MargoBundle\Entity\Classe $classes)
    {
        $this->classes[] = $classes;
    
        return $this;
    }

    /**
     * Remove classes
     *
     * @param \Margo\MargoBundle\Entity\Classe $classes
     */
    public function removeClass(\Margo\MargoBundle\Entity\Classe $classes)
    {
        $this->classes->removeElement($classes);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Add intervenants
     *
     * @param \Margo\MargoBundle\Entity\Intervenant $intervenants
     * @return Filiere
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

    /**
     * Add matieres
     *
     * @param \Margo\MargoBundle\Entity\Matiere $matieres
     * @return Filiere
     */
    public function addMatiere(\Margo\MargoBundle\Entity\Matiere $matieres)
    {
        $this->matieres[] = $matieres;
    
        return $this;
    }

    /**
     * Remove matieres
     *
     * @param \Margo\MargoBundle\Entity\Matiere $matieres
     */
    public function removeMatiere(\Margo\MargoBundle\Entity\Matiere $matieres)
    {
        $this->matieres->removeElement($matieres);
    }

    /**
     * Get matieres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatieres()
    {
        return $this->matieres;
    }
}
