<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseigne
 *
 * @ORM\Table(name="enseigne", indexes={@ORM\Index(name="I_FK_ENSEIGNE_INTERVENANT", columns={"IDPERS"}), @ORM\Index(name="I_FK_ENSEIGNE_MATIERE", columns={"CODEMAT"}), @ORM\Index(name="I_FK_ENSEIGNE_CLASSE", columns={"CODECLASSE"})})
 * @ORM\Entity
 */
class Enseigne
{
    /**
     * @var \Intervenant
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Intervenant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDPERS", referencedColumnName="IDPERS")
     * })
     */
    private $idpers;

    /**
     * @var \Matiere
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Matiere")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CODEMAT", referencedColumnName="CODEMAT")
     * })
     */
    private $codemat;

    /**
     * @var \Classe
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Classe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CODECLASSE", referencedColumnName="CODECLASSE")
     * })
     */
    private $codeclasse;



    /**
     * Set idpers
     *
     * @param \Margo\MargoBundle\Entity\Intervenant $idpers
     * @return Enseigne
     */
    public function setIdpers(\Margo\MargoBundle\Entity\Intervenant $idpers)
    {
        $this->idpers = $idpers;

        return $this;
    }

    /**
     * Get idpers
     *
     * @return \Margo\MargoBundle\Entity\Intervenant 
     */
    public function getIdpers()
    {
        return $this->idpers;
    }

    /**
     * Set codemat
     *
     * @param \Margo\MargoBundle\Entity\Matiere $codemat
     * @return Enseigne
     */
    public function setCodemat(\Margo\MargoBundle\Entity\Matiere $codemat)
    {
        $this->codemat = $codemat;

        return $this;
    }

    /**
     * Get codemat
     *
     * @return \Margo\MargoBundle\Entity\Matiere 
     */
    public function getCodemat()
    {
        return $this->codemat;
    }

    /**
     * Set codeclasse
     *
     * @param \Margo\MargoBundle\Entity\Classe $codeclasse
     * @return Enseigne
     */
    public function setCodeclasse(\Margo\MargoBundle\Entity\Classe $codeclasse)
    {
        $this->codeclasse = $codeclasse;

        return $this;
    }

    /**
     * Get codeclasse
     *
     * @return \Margo\MargoBundle\Entity\Classe 
     */
    public function getCodeclasse()
    {
        return $this->codeclasse;
    }
}
