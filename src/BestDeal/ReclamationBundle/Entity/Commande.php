<?php

namespace BestDeal\ReclamationBundle\Entity;

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
     * @var \BestDeal\ReclamationBundle\Entity\Client
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
     * @param \BestDeal\ReclamationBundle\Entity\Client $idClient
     * @return Commande
     */
    public function setIdClient(\BestDeal\ReclamationBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \BestDeal\ReclamationBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
