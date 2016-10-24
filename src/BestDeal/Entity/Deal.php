<?php

namespace BestDeal\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deal
 *
 * @ORM\Table(name="deal")
 * @ORM\Entity
 */
class Deal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_deal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDeal;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_deal", type="string", length=45, nullable=false)
     */
    private $nomDeal;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=45, nullable=true)
     */
    private $categorie;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_primaire", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixPrimaire;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_solde", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixSolde;

    /**
     * @var float
     *
     * @ORM\Column(name="qte_deal", type="float", precision=10, scale=0, nullable=true)
     */
    private $qteDeal;

    /**
     * @var string
     *
     * @ORM\Column(name="date_promotion", type="string", length=45, nullable=true)
     */
    private $datePromotion;

    /**
     * @var string
     *
     * @ORM\Column(name="affiche_deal", type="string", length=200, nullable=true)
     */
    private $afficheDeal;



    /**
     * Get idDeal
     *
     * @return integer 
     */
    public function getIdDeal()
    {
        return $this->idDeal;
    }

    /**
     * Set nomDeal
     *
     * @param string $nomDeal
     * @return Deal
     */
    public function setNomDeal($nomDeal)
    {
        $this->nomDeal = $nomDeal;

        return $this;
    }

    /**
     * Get nomDeal
     *
     * @return string 
     */
    public function getNomDeal()
    {
        return $this->nomDeal;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Deal
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set prixPrimaire
     *
     * @param float $prixPrimaire
     * @return Deal
     */
    public function setPrixPrimaire($prixPrimaire)
    {
        $this->prixPrimaire = $prixPrimaire;

        return $this;
    }

    /**
     * Get prixPrimaire
     *
     * @return float 
     */
    public function getPrixPrimaire()
    {
        return $this->prixPrimaire;
    }

    /**
     * Set prixSolde
     *
     * @param float $prixSolde
     * @return Deal
     */
    public function setPrixSolde($prixSolde)
    {
        $this->prixSolde = $prixSolde;

        return $this;
    }

    /**
     * Get prixSolde
     *
     * @return float 
     */
    public function getPrixSolde()
    {
        return $this->prixSolde;
    }

    /**
     * Set qteDeal
     *
     * @param float $qteDeal
     * @return Deal
     */
    public function setQteDeal($qteDeal)
    {
        $this->qteDeal = $qteDeal;

        return $this;
    }

    /**
     * Get qteDeal
     *
     * @return float 
     */
    public function getQteDeal()
    {
        return $this->qteDeal;
    }

    /**
     * Set datePromotion
     *
     * @param string $datePromotion
     * @return Deal
     */
    public function setDatePromotion($datePromotion)
    {
        $this->datePromotion = $datePromotion;

        return $this;
    }

    /**
     * Get datePromotion
     *
     * @return string 
     */
    public function getDatePromotion()
    {
        return $this->datePromotion;
    }

    /**
     * Set afficheDeal
     *
     * @param string $afficheDeal
     * @return Deal
     */
    public function setAfficheDeal($afficheDeal)
    {
        $this->afficheDeal = $afficheDeal;

        return $this;
    }

    /**
     * Get afficheDeal
     *
     * @return string 
     */
    public function getAfficheDeal()
    {
        return $this->afficheDeal;
    }
}
