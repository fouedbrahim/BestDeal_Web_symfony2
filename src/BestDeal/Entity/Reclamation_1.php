<?php

namespace BestDeal\AdminPrestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
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
     * @var string
     *
     * @ORM\Column(name="type_reclamation", type="string", length=45, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="date_reclamation", type="string", length=45, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description_reclamation", type="string", length=300, nullable=false)
     */
    private $description;
     /**
     * @var boolean
     *
     * @ORM\Column(name="statut_reclamation", type="boolean", nullable=false)
     */
    private $statut;

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
     * Set type
     *
     * @param string $type
     * @return Reclamation
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Reclamation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Reclamation
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
     * Get statut
     *
     * @return boolean 
     */
    public function getStatut() {
        return $this->statut;
    }

     /**
     * Set statut
     *
     * @param boolean $statut
     * @return Reclamation
     */
    public function setStatut($statut) {
        $this->statut = $statut;
    }


}
