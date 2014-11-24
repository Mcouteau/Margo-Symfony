<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intervenant
 *
 * @ORM\Table(name="intervenant")
 * @ORM\Entity
 */
class Intervenant
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=32, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=32, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="SITUATION", type="string", length=32, nullable=true)
     */
    private $situation;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=32, nullable=true)
     */
    private $adresse;

    /**
     * @var \Personnel
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Personnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDPERS", referencedColumnName="IDPERS")
     * })
     */
    private $idpers;



    /**
     * Set nom
     *
     * @param string $nom
     * @return Intervenant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Intervenant
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
     * Set situation
     *
     * @param string $situation
     * @return Intervenant
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * Get situation
     *
     * @return string 
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Intervenant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set idpers
     *
     * @param \Margo\MargoBundle\Entity\Personnel $idpers
     * @return Intervenant
     */
    public function setIdpers(\Margo\MargoBundle\Entity\Personnel $idpers)
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
