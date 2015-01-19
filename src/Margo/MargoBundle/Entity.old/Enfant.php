<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfant
 *
 * @ORM\Table(name="enfant", indexes={@ORM\Index(name="I_FK_ENFANT_PERSONNEL", columns={"IDPERS"})})
 * @ORM\Entity
 */
class Enfant
{
    /**
     * @var string
     *
     * @ORM\Column(name="IDENFANT", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idenfant;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=32, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="DATENAISS", type="string", length=32, nullable=true)
     */
    private $datenaiss;

    /**
     * @var \Personnel
     *
     * @ORM\ManyToOne(targetEntity="Personnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDPERS", referencedColumnName="IDPERS")
     * })
     */
    private $idpers;



    /**
     * Get idenfant
     *
     * @return string 
     */
    public function getIdenfant()
    {
        return $this->idenfant;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Enfant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenaiss
     *
     * @param string $datenaiss
     * @return Enfant
     */
    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    /**
     * Get datenaiss
     *
     * @return string 
     */
    public function getDatenaiss()
    {
        return $this->datenaiss;
    }

    /**
     * Set idpers
     *
     * @param \Margo\MargoBundle\Entity\Personnel $idpers
     * @return Enfant
     */
    public function setIdpers(\Margo\MargoBundle\Entity\Personnel $idpers = null)
    {
        $this->idpers = $idpers;

        return $this;
    }

    /**
     * Get idpers
     *
     * @return \Margo\MargoBundle\Entity\Personnel 
     */
    public function getIdpers()
    {
        return $this->idpers;
    }
}
