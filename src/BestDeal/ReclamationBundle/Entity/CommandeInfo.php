<?php

namespace BestDeal\ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeInfo
 */
class CommandeInfo
{
    /**
     * @var integer
     */
    private $qte;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BestDeal\ReclamationBundle\Entity\Commande
     */
    private $idCommande;

    /**
     * @var \BestDeal\ReclamationBundle\Entity\Produit
     */
    private $idProduit;


    /**
     * Set qte
     *
     * @param integer $qte
     * @return CommandeInfo
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return integer 
     */
    public function getQte()
    {
        return $this->qte;
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

    /**
     * Set idCommande
     *
     * @param \BestDeal\ReclamationBundle\Entity\Commande $idCommande
     * @return CommandeInfo
     */
    public function setIdCommande(\BestDeal\ReclamationBundle\Entity\Commande $idCommande = null)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande
     *
     * @return \BestDeal\ReclamationBundle\Entity\Commande 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set idProduit
     *
     * @param \BestDeal\ReclamationBundle\Entity\Produit $idProduit
     * @return CommandeInfo
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
