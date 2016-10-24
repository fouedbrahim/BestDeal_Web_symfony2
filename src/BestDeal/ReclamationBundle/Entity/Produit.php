<?php

namespace BestDeal\ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 */
class Produit
{
    /**
     * @var string
     */
    private $nomProduit;

    /**
     * @var string
     */
    private $categorie;

    /**
     * @var float
     */
    private $prixPrimaire;

    /**
     * @var float
     */
    private $prixSolde;

    /**
     * @var float
     */
    private $qteProduit;

    /**
     * @var \DateTime
     */
    private $datePromotion;

    /**
     * @var string
     */
    private $afficheProduit;

    /**
     * @var string
     */
    private $videoPublicitaire;

    /**
     * @var string
     */
    private $idPrestataire;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BestDeal\ReclamationBundle\Entity\Categorie
     */
    private $idCat;


    /**
     * Set nomProduit
     *
     * @param string $nomProduit
     * @return Produit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string 
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Produit
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
     * @return Produit
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
     * @return Produit
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
     * Set qteProduit
     *
     * @param float $qteProduit
     * @return Produit
     */
    public function setQteProduit($qteProduit)
    {
        $this->qteProduit = $qteProduit;

        return $this;
    }

    /**
     * Get qteProduit
     *
     * @return float 
     */
    public function getQteProduit()
    {
        return $this->qteProduit;
    }

    /**
     * Set datePromotion
     *
     * @param \DateTime $datePromotion
     * @return Produit
     */
    public function setDatePromotion($datePromotion)
    {
        $this->datePromotion = $datePromotion;

        return $this;
    }

    /**
     * Get datePromotion
     *
     * @return \DateTime 
     */
    public function getDatePromotion()
    {
        return $this->datePromotion;
    }

    /**
     * Set afficheProduit
     *
     * @param string $afficheProduit
     * @return Produit
     */
    public function setAfficheProduit($afficheProduit)
    {
        $this->afficheProduit = $afficheProduit;

        return $this;
    }

    /**
     * Get afficheProduit
     *
     * @return string 
     */
    public function getAfficheProduit()
    {
        return $this->afficheProduit;
    }

    /**
     * Set videoPublicitaire
     *
     * @param string $videoPublicitaire
     * @return Produit
     */
    public function setVideoPublicitaire($videoPublicitaire)
    {
        $this->videoPublicitaire = $videoPublicitaire;

        return $this;
    }

    /**
     * Get videoPublicitaire
     *
     * @return string 
     */
    public function getVideoPublicitaire()
    {
        return $this->videoPublicitaire;
    }

    /**
     * Set idPrestataire
     *
     * @param string $idPrestataire
     * @return Produit
     */
    public function setIdPrestataire($idPrestataire)
    {
        $this->idPrestataire = $idPrestataire;

        return $this;
    }

    /**
     * Get idPrestataire
     *
     * @return string 
     */
    public function getIdPrestataire()
    {
        return $this->idPrestataire;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
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
     * Set idCat
     *
     * @param \BestDeal\ReclamationBundle\Entity\Categorie $idCat
     * @return Produit
     */
    public function setIdCat(\BestDeal\ReclamationBundle\Entity\Categorie $idCat = null)
    {
        $this->idCat = $idCat;

        return $this;
    }

    /**
     * Get idCat
     *
     * @return \BestDeal\ReclamationBundle\Entity\Categorie 
     */
    public function getIdCat()
    {
        return $this->idCat;
    }
}
