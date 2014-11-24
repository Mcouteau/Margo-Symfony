<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe", indexes={@ORM\Index(name="I_FK_CLASSE_FILIERE", columns={"CODEFILIERE"})})
 * @ORM\Entity
 */
class Classe
{
    /**
     * @var string
     *
     * @ORM\Column(name="CODECLASSE", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeclasse;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBCLASSE", type="string", length=32, nullable=true)
     */
    private $libclasse;

    /**
     * @var \Filiere
     *
     * @ORM\ManyToOne(targetEntity="Filiere")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CODEFILIERE", referencedColumnName="CODEFILIERE")
     * })
     */
    private $codefiliere;



    /**
     * Get codeclasse
     *
     * @return string 
     */
    public function getCodeclasse()
    {
        return $this->codeclasse;
    }

    /**
     * Set libclasse
     *
     * @param string $libclasse
     * @return Classe
     */
    public function setLibclasse($libclasse)
    {
        $this->libclasse = $libclasse;

        return $this;
    }

    /**
     * Get libclasse
     *
     * @return string 
     */
    public function getLibclasse()
    {
        return $this->libclasse;
    }

    /**
     * Set codefiliere
     *
     * @param \Margo\MargoBundle\Entity\Filiere $codefiliere
     * @return Classe
     */
    public function setCodefiliere(\Margo\MargoBundle\Entity\Filiere $codefiliere = null)
    {
        $this->codefiliere = $codefiliere;

        return $this;
    }

    /**
     * Get codefiliere
     *
     * @return \Margo\MargoBundle\Entity\Filiere 
     */
    public function getCodefiliere()
    {
        return $this->codefiliere;
    }
}
