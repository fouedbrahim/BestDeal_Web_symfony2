<?php

namespace BestDeal\MainBundle\Entity;

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
    private $typeReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="date_reclamation", type="string", length=45, nullable=false)
     */
    private $dateReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="description_reclamation", type="string", length=300, nullable=false)
     */
    private $descriptionReclamation;



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
     * Set typeReclamation
     *
     * @param string $typeReclamation
     * @return Reclamation
     */
    public function setTypeReclamation($typeReclamation)
    {
        $this->typeReclamation = $typeReclamation;

        return $this;
    }

    /**
     * Get typeReclamation
     *
     * @return string 
     */
    public function getTypeReclamation()
    {
        return $this->typeReclamation;
    }

    /**
     * Set dateReclamation
     *
     * @param string $dateReclamation
     * @return Reclamation
     */
    public function setDateReclamation($dateReclamation)
    {
        $this->dateReclamation = $dateReclamation;

        return $this;
    }

    /**
     * Get dateReclamation
     *
     * @return string 
     */
    public function getDateReclamation()
    {
        return $this->dateReclamation;
    }

    /**
     * Set descriptionReclamation
     *
     * @param string $descriptionReclamation
     * @return Reclamation
     */
    public function setDescriptionReclamation($descriptionReclamation)
    {
        $this->descriptionReclamation = $descriptionReclamation;

        return $this;
    }

    /**
     * Get descriptionReclamation
     *
     * @return string 
     */
    public function getDescriptionReclamation()
    {
        return $this->descriptionReclamation;
    }
}
