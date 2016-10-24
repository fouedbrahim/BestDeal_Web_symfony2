<?php

namespace BestDeal\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 */
class Commande
{
    /**
     * @var \DateTime
     */
    private $dateRes;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BestDeal\CommandeBundle\Entity\Client
     */
    private $idClient;


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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idClient
     *
     * @param \BestDeal\CommandeBundle\Entity\Client $idClient
     * @return Commande
     */
    public function setIdClient(\BestDeal\CommandeBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \BestDeal\CommandeBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
