<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 */
class Etudiant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $situation;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var \Margo\MargoBundle\Entity\Classe
     */
    private $classe;


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
     * Set classe
     *
     * @param \Margo\MargoBundle\Entity\Classe $classe
     * @return Etudiant
     */
    public function setClasse(\Margo\MargoBundle\Entity\Classe $classe = null)
    {
        $this->classe = $classe;
    
        return $this;
    }

    /**
     * Get classe
     *
     * @return \Margo\MargoBundle\Entity\Classe 
     */
    public function getClasse()
    {
        return $this->classe;
    }
    /**
     * @var integer
     */
    private $age;


    /**
     * Set age
     *
     * @param integer $age
     * @return Etudiant
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }
    /**
     * @var \DateTime
     */
    private $birthdate;


    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Etudiant
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    
        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }
}
