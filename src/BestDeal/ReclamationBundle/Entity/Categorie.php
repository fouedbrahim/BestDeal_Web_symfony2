<?php

namespace BestDeal\ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 */
class Categorie
{
    /**
     * @var string
     */
    private $nomCategorie;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nomCategorie
     *
     * @param string $nomCategorie
     * @return Categorie
     */
    public function setNomCategorie($nomCategorie)
    {
        $this->nomCategorie = $nomCategorie;

        return $this;
    }

    /**
     * Get nomCategorie
     *
     * @return string 
     */
    public function getNomCategorie()
    {
        return $this->nomCategorie;
    }

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
