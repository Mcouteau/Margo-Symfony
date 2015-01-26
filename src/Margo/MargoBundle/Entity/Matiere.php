<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 */
class Matiere
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
    private $intervenants;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * @return Matiere
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
     * Add intervenants
     *
     * @param \Margo\MargoBundle\Entity\Intervenant $intervenants
     * @return Matiere
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
