<?php

namespace BestDeal\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande1
 */
class Commande1
{
    /**
     * @var integer
     */
    private $idProduit;

    /**
     * @var integer
     */
    private $idClient;

    /**
     * @var integer
     */
    private $qte;

    /**
     * @var \DateTime
     */
    private $dateRes;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idProduit
     *
     * @param integer $idProduit
     * @return Commande1
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return integer 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set idClient
     *
     * @param integer $idClient
     * @return Commande1
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return integer 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     * @return Commande1
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
     * Set dateRes
     *
     * @param \DateTime $dateRes
     * @return Commande1
     */
    public function setDateRes($dateRes)
    {
        $this->dateRes = $dateRes;

        return $this;
    }

    /**
     * Get dateRes
     *
     * @return \DateTime 
     */
    public function getDateRes()
    {
        return $this->dateRes;
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
