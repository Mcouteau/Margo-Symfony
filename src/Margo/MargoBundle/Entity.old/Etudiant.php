<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant", indexes={@ORM\Index(name="I_FK_ETUDIANT_CLASSE", columns={"CODECLASSE"})})
 * @ORM\Entity
 */
class Etudiant
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
     * @var \Classe
     *
     * @ORM\ManyToOne(targetEntity="Classe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CODECLASSE", referencedColumnName="CODECLASSE")
     * })
     */
    private $codeclasse;

    /**
     * @var \Personne
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDPERS", referencedColumnName="IDPERS")
     * })
     */
    private $idpers;



    /**
     * Set nom
     *
     * @param string $nom
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * Set codeclasse
     *
     * @param int $codeclasse
     * @return Etudiant
     */
    public function setCodeclasse($codeclasse)
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

    /**
     * Set idpers
     *
     * @param \Margo\MargoBundle\Entity\Personne $idpers
     * @return Etudiant
     */
    public function setIdpers(\Margo\MargoBundle\Entity\Personne $idpers)
    {
        $this->idpers = $idpers;

        return $this;
    }

    /**
     * Get idpers
     *
     * @return \Margo\MargoBundle\Entity\Personne 
     */
    public function getIdpers()
    {
        return $this->idpers;
    }
}
