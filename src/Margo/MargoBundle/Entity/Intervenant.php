<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intervenant
 */
class Intervenant extends Personnel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $is_permanent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $matieres;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $classes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->matieres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set is_permanent
     *
     * @param boolean $isPermanent
     * @return Intervenant
     */
    public function setIsPermanent($isPermanent)
    {
        $this->is_permanent = $isPermanent;
    
        return $this;
    }

    /**
     * Get is_permanent
     *
     * @return boolean 
     */
    public function getIsPermanent()
    {
        return $this->is_permanent;
    }

    /**
     * Add matieres
     *
     * @param \Margo\MargoBundle\Entity\Matiere $matieres
     * @return Intervenant
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

    /**
     * Add classes
     *
     * @param \Margo\MargoBundle\Entity\Classe $classes
     * @return Intervenant
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
}
