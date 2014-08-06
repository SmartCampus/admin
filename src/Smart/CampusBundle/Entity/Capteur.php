<?php

namespace Smart\CampusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Capteur
 *
 * @ORM\MappedSuperclass(repositoryClass="Smart\CampusBundle\Entity\CapteurRepository")
 * @UniqueEntity("id")
 * @UniqueEntity("name")
 */
class Capteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     * @Assert\Regex(pattern= "/[A-Z]+_[0-9-A-Z]+V?/")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="kind", type="string", length=255)
     */
    private $kind;

    /**
     * @var integer
     *
     * @ORM\Column(name="frequency", type="integer")
     * @Assert\Type(type="integer")
     * @Assert\Range(min=0)
     */
    private $frequency;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="Smart\CampusBundle\Entity\Propriete", mappedBy="capteur", cascade={"all"})
     * @ORM\JoinColumn(name="propriete_id", referencedColumnName="id")
     */
    protected $propriete;

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
     * Set name
     *
     * @param string $name
     * @return Capteur
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set kind
     *
     * @param string $kind
     * @return Capteur
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get kind
     *
     * @return string 
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Set frequency
     *
     * @param float $frequency
     * @return Capteur
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     * @return float 
     */
    public function getFrequency()
    {
        return $this->frequency;
    }
    
    /**
     * Get propriete
     *
     * @return array 
     */
    public function getPropriete()
    {
        return $this->propriete;
    }
}
