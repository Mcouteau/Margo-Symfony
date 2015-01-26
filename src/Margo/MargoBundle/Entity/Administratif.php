<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administratif
 */
class Administratif
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $age;


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
     * Set age
     *
     * @param integer $age
     * @return Administratif
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
}
