<?php

namespace BestDeal\ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tempproduit
 */
class Tempproduit
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BestDeal\ReclamationBundle\Entity\Client
     */
    private $idClient;

    /**
     * @var \BestDeal\ReclamationBundle\Entity\Produit
     */
    private $idProduit;


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
     * Set idClient
     *
     * @param \BestDeal\ReclamationBundle\Entity\Client $idClient
     * @return Tempproduit
     */
    public function setIdClient(\BestDeal\ReclamationBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \BestDeal\ReclamationBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set idProduit
     *
     * @param \BestDeal\ReclamationBundle\Entity\Produit $idProduit
     * @return Tempproduit
     */
    public function setIdProduit(\BestDeal\ReclamationBundle\Entity\Produit $idProduit = null)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return \BestDeal\ReclamationBundle\Entity\Produit 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }
}
