<?php

namespace BestDeal\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="FK_commande_2", columns={"id_client"})})
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
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_res", type="datetime", nullable=false)
     */
    private $dateRes;

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
    public function getId()
    {
        return $this->id;
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
     * Set idClient
     *
     * @param \BestDeal\MainBundle\Entity\Client $idClient
     * @return Commande
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
