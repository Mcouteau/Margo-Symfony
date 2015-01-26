<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnel
 */
class Personnel extends Personne
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type_contrat;

    /**
     * @var \DateTime
     */
    private $date_debut_contrat;

    /**
     * @var \DateTime
     */
    private $date_fin_contrat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $enfants;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enfants = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set type_contrat
     *
     * @param string $typeContrat
     * @return Personnel
     */
    public function setTypeContrat($typeContrat)
    {
        $this->type_contrat = $typeContrat;
    
        return $this;
    }

    /**
     * Get type_contrat
     *
     * @return string 
     */
    public function getTypeContrat()
    {
        return $this->type_contrat;
    }

    /**
     * Set date_debut_contrat
     *
     * @param \DateTime $dateDebutContrat
     * @return Personnel
     */
    public function setDateDebutContrat($dateDebutContrat)
    {
        $this->date_debut_contrat = $dateDebutContrat;
    
        return $this;
    }

    /**
     * Get date_debut_contrat
     *
     * @return \DateTime 
     */
    public function getDateDebutContrat()
    {
        return $this->date_debut_contrat;
    }

    /**
     * Set date_fin_contrat
     *
     * @param \DateTime $dateFinContrat
     * @return Personnel
     */
    public function setDateFinContrat($dateFinContrat)
    {
        $this->date_fin_contrat = $dateFinContrat;
    
        return $this;
    }

    /**
     * Get date_fin_contrat
     *
     * @return \DateTime 
     */
    public function getDateFinContrat()
    {
        return $this->date_fin_contrat;
    }

    /**
     * Add enfants
     *
     * @param \Margo\MargoBundle\Entity\Enfant $enfants
     * @return Personnel
     */
    public function addEnfant(\Margo\MargoBundle\Entity\Enfant $enfants)
    {
        $this->enfants[] = $enfants;
    
        return $this;
    }

    /**
     * Remove enfants
     *
     * @param \Margo\MargoBundle\Entity\Enfant $enfants
     */
    public function removeEnfant(\Margo\MargoBundle\Entity\Enfant $enfants)
    {
        $this->enfants->removeElement($enfants);
    }

    /**
     * Get enfants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnfants()
    {
        return $this->enfants;
    }
}
