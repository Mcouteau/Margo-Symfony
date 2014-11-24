<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 *
 * @ORM\Table(name="filiere", uniqueConstraints={@ORM\UniqueConstraint(name="I_FK_FILIERE_ENSEIGNANT", columns={"IDPERS"})})
 * @ORM\Entity
 */
class Filiere
{
    /**
     * @var string
     *
     * @ORM\Column(name="CODEFILIERE", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codefiliere;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBFILIERE", type="string", length=32, nullable=true)
     */
    private $libfiliere;

    /**
     * @var \Enseignant
     *
     * @ORM\ManyToOne(targetEntity="Enseignant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDPERS", referencedColumnName="IDPERS")
     * })
     */
    private $idpers;



    /**
     * Get codefiliere
     *
     * @return string 
     */
    public function getCodefiliere()
    {
        return $this->codefiliere;
    }

    /**
     * Set libfiliere
     *
     * @param string $libfiliere
     * @return Filiere
     */
    public function setLibfiliere($libfiliere)
    {
        $this->libfiliere = $libfiliere;

        return $this;
    }

    /**
     * Get libfiliere
     *
     * @return string 
     */
    public function getLibfiliere()
    {
        return $this->libfiliere;
    }

    /**
     * Set idpers
     *
     * @param \Margo\MargoBundle\Entity\Enseignant $idpers
     * @return Filiere
     */
    public function setIdpers(\Margo\MargoBundle\Entity\Enseignant $idpers = null)
    {
        $this->idpers = $idpers;

        return $this;
    }

    /**
     * Get idpers
     *
     * @return \Margo\MargoBundle\Entity\Enseignant 
     */
    public function getIdpers()
    {
        return $this->idpers;
    }
}
