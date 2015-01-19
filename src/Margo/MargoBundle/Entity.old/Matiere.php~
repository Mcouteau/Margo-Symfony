<?php

namespace Margo\MargoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity
 */
class Matiere
{
    /**
     * @var string
     *
     * @ORM\Column(name="CODEMAT", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codemat;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBMAT", type="string", length=32, nullable=true)
     */
    private $libmat;



    /**
     * Get codemat
     *
     * @return string 
     */
    public function getCodemat()
    {
        return $this->codemat;
    }

    /**
     * Set libmat
     *
     * @param string $libmat
     * @return Matiere
     */
    public function setLibmat($libmat)
    {
        $this->libmat = $libmat;

        return $this;
    }

    /**
     * Get libmat
     *
     * @return string 
     */
    public function getLibmat()
    {
        return $this->libmat;
    }
}
