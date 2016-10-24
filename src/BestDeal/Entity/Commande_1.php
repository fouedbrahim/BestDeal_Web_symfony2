<?php

namespace BestDeal\AdminPrestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="FK_commande_1", columns={"id_produit"}), @ORM\Index(name="FK_commande_2", columns={"id_client"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="qte", type="integer", nullable=false)
     */
    private $qte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_res", type="datetime", nullable=false)
     */
    private $dateRes;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produit", referencedColumnName="id_produit")
     * })
     */
    private $idProduit;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;



    /**
     * Get idCommande
     *
     * @return integer 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     * @return Commande
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
     * @return Commande
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
     * Set idProduit
     *
     * @param \BestDeal\AdminPrestBundle\Entity\Produit $idProduit
     * @return Commande
     */
    public function setIdProduit(\BestDeal\AdminPrestBundle\Entity\Produit $idProduit = null)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return \BestDeal\AdminPrestBundle\Entity\Produit 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set idClient
     *
     * @param \BestDeal\AdminPrestBundle\Entity\Client $idClient
     * @return Commande
     */
    public function setIdClient(\BestDeal\AdminPrestBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \BestDeal\AdminPrestBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
