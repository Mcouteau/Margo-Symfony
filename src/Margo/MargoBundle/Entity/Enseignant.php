<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 */
class Enseignant extends Intervenant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $niveau_etudes;


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
     * Set niveau_etudes
     *
     * @param string $niveauEtudes
     * @return Enseignant
     */
    public function setNiveauEtudes($niveauEtudes)
    {
        $this->niveau_etudes = $niveauEtudes;
    
        return $this;
    }

    /**
     * Get niveau_etudes
     *
     * @return string 
     */
    public function getNiveauEtudes()
    {
        return $this->niveau_etudes;
    }
}
