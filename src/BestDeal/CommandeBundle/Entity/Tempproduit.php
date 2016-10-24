<?php

namespace BestDeal\CommandeBundle\Entity;

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
     * @var \BestDeal\CommandeBundle\Entity\Client
     */
    private $idClient;

    /**
     * @var \BestDeal\CommandeBundle\Entity\Produit
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
     * @param \BestDeal\CommandeBundle\Entity\Client $idClient
     * @return Tempproduit
     */
    public function setIdClient(\BestDeal\CommandeBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \BestDeal\CommandeBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set idProduit
     *
     * @param \BestDeal\CommandeBundle\Entity\Produit $idProduit
     * @return Tempproduit
     */
    public function setIdProduit(\BestDeal\CommandeBundle\Entity\Produit $idProduit = null)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return \BestDeal\CommandeBundle\Entity\Produit 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }
}
