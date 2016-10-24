<?php

namespace BestDeal\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeInfo
 *
 * @ORM\Table(name="commande_info", indexes={@ORM\Index(name="id_produit", columns={"id_produit"}), @ORM\Index(name="id_commande", columns={"id_commande"}), @ORM\Index(name="id_livraison", columns={"id_livraison"})})
 * @ORM\Entity
 */
class CommandeInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="qte", type="integer", nullable=true)
     */
    private $qte;

    /**
     * @var \Livraison
     *
     * @ORM\ManyToOne(targetEntity="Livraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_livraison", referencedColumnName="id")
     * })
     */
    private $idLivraison;

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
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commande", referencedColumnName="id_commande")
     * })
     */
    private $idCommande;



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
     * Set idLivraison
     *
     * @param \BestDeal\MainBundle\Entity\Livraison $idLivraison
     * @return CommandeInfo
     */
    public function setIdLivraison(\BestDeal\MainBundle\Entity\Livraison $idLivraison = null)
    {
        $this->idLivraison = $idLivraison;

        return $this;
    }

    /**
     * Get idLivraison
     *
     * @return \BestDeal\MainBundle\Entity\Livraison 
     */
    public function getIdLivraison()
    {
        return $this->idLivraison;
    }

    /**
     * Set idProduit
     *
     * @param \BestDeal\MainBundle\Entity\Produit $idProduit
     * @return CommandeInfo
     */
    public function setIdProduit(\BestDeal\MainBundle\Entity\Produit $idProduit = null)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return \BestDeal\MainBundle\Entity\Produit 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set idCommande
     *
     * @param \BestDeal\MainBundle\Entity\Commande $idCommande
     * @return CommandeInfo
     */
    public function setIdCommande(\BestDeal\MainBundle\Entity\Commande $idCommande = null)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande
     *
     * @return \BestDeal\MainBundle\Entity\Commande 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }
}
