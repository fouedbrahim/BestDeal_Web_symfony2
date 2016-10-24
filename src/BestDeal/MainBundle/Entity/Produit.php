<?php

namespace BestDeal\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="FK_produit_categorie", columns={"id_cat"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_produit", type="string", length=45, nullable=false)
     */
    private $nomProduit;

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
     * @ORM\Column(name="qte_produit", type="float", precision=10, scale=0, nullable=true)
     */
    private $qteProduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_promotion", type="date", nullable=true)
     */
    private $datePromotion;

    /**
     * @var string
     *
     * @ORM\Column(name="affiche_produit", type="string", length=70, nullable=true)
     */
    private $afficheProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="video_publicitaire", type="string", length=45, nullable=true)
     */
    private $videoPublicitaire;

    /**
     * @var string
     *
     * @ORM\Column(name="id_prestataire", type="string", length=45, nullable=false)
     */
    private $idPrestataire;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=4000, nullable=false)
     */
    private $description;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat", referencedColumnName="id_categorie")
     * })
     */
    private $idCat;



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
     * Set idCat
     *
     * @param \BestDeal\MainBundle\Entity\Categorie $idCat
     * @return Produit
     */
    public function setIdCat(\BestDeal\MainBundle\Entity\Categorie $idCat = null)
    {
        $this->idCat = $idCat;

        return $this;
    }

    /**
     * Get idCat
     *
     * @return \BestDeal\MainBundle\Entity\Categorie 
     */
    public function getIdCat()
    {
        return $this->idCat;
    }
}
