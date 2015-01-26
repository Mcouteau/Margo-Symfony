<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Personne
 */
class Personne implements UserInterface, \Serializable
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

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
     * @var bool
     */
    private $isActive;
    
    public function __construct() 
    {
      $this->isActive = true;
    }
    /**
     * Set email
     *
     * @param string $email
     * @return Personne
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->username = $email;
        
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Personne
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Personne
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
     * @return Personne
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
     * @return Personne
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
     * @return Personne
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
     * Get roles
     *
     * @return Array 
     */
    public function getRoles() {
      return array('ROLE_USER');
    }
     /**
     * Get salt
     *
     * @return null 
     */
    public function getSalt() {
      return null;
    }
     /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
      return $this->username;
    }
     /**
     * Get adresse
     *
     * @return string 
     */
    public function eraseCredentials() {
      
    }
    /**
     * @see \Serializable::serialize()
     */
    public function serialize() {
      return serialize(array(
        $this->id,
        $this->username,
        $this->password
      ));
    }
    
    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized) {
      list(
              $this->id,
              $this->username,
              $this->password
      ) = unserialize($serialized);
    }
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
