<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfant
 */
class Enfant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var \Margo\MargoBundle\Entity\Personnel
     */
    private $personnel;


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
     * Set firstname
     *
     * @param string $firstname
     * @return Enfant
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Enfant
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Enfant
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

    /**
     * Set personnel
     *
     * @param \Margo\MargoBundle\Entity\Personnel $personnel
     * @return Enfant
     */
    public function setPersonnel(\Margo\MargoBundle\Entity\Personnel $personnel = null)
    {
        $this->personnel = $personnel;
    
        return $this;
    }

    /**
     * Get personnel
     *
     * @return \Margo\MargoBundle\Entity\Personnel 
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }
}
