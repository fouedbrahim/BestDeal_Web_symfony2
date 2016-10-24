<?php

namespace BestDeal\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeInfo
 */
class CommandeInfo
{
    public static $counter = 1;
     function __construct() {
        
         self::$counter++;
         
     }
    /**
     * @var integer
     */
    private $qte;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BestDeal\CommandeBundle\Entity\Produit
     */
    private $idProduit;

    /**
     * @var \BestDeal\CommandeBundle\Entity\Commande
     */
    private $idCommande;


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
     * Set idProduit
     *
     * @param \BestDeal\CommandeBundle\Entity\Produit $idProduit
     * @return CommandeInfo
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

    /**
     * Set idCommande
     *
     * @param \BestDeal\CommandeBundle\Entity\Commande $idCommande
     * @return CommandeInfo
     */
    public function setIdCommande(\BestDeal\CommandeBundle\Entity\Commande $idCommande = null)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande
     *
     * @return \BestDeal\CommandeBundle\Entity\Commande 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }
}
