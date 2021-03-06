<?php

namespace Smart\CampusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Board
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Smart\CampusBundle\Entity\BoardRepository")
 * @UniqueEntity("name")
 */
class Board
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     * @Assert\Regex(pattern= "/[a-zA-Z0-9]+_[a-zA-Z0-9]+_[a-zA-Z0-9]+/")
     */
    private $name;
    
    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="Smart\CampusBundle\Entity\Physique", mappedBy="board", cascade={"refresh", "merge", "persist", "detach"})
     * @ORM\JoinColumn(name="physique_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $physique;
    
    
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
     * @return Board
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
     * Get physique
     *
     * @return array
     */
    public function getPhysique()
    {
        return $this->physique;
    }
}
