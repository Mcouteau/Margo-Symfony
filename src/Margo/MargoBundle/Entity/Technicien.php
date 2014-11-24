<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Technicien
 *
 * @ORM\Table(name="technicien")
 * @ORM\Entity
 */
class Technicien
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
     * Set nom
     *
     * @param string $nom
     * @return Technicien
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
     * @return Technicien
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
     * @return Technicien
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
     * @return Technicien
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
     * @param \Margo\MargoBundle\Entity\Intervenant $idpers
     * @return Technicien
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
}
