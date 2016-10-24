<?php

namespace BestDeal\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tempproduit
 *
 * @ORM\Table(name="tempproduit", indexes={@ORM\Index(name="id_produit", columns={"id_produit"}), @ORM\Index(name="id_client", columns={"id_client"})})
 * @ORM\Entity
 */
class Tempproduit
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
     * @param \BestDeal\MainBundle\Entity\Produit $idProduit
     * @return Tempproduit
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
     * Set idClient
     *
     * @param \BestDeal\MainBundle\Entity\Client $idClient
     * @return Tempproduit
     */
    public function setIdClient(\BestDeal\MainBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \BestDeal\MainBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
