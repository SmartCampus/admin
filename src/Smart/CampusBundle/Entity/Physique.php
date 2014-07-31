<?php

namespace Smart\CampusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Physique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Smart\CampusBundle\Entity\PhysiqueRepository")
 */
class Physique extends Capteur
{
    /**
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="Smart\CampusBundle\Entity\Board", cascade={"refresh", "merge", "persist", "detach"})
     * @ORM\JoinColumn(name="board_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $board;

    /**
     * @var integer
     *
     * @ORM\Column(name="pin", type="integer")
     * @Assert\Range(min=0)
     */
    private $pin;
    
    /**
     * @var \stdClass
     * @ORM\OneToOne(targetEntity="Smart\CampusBundle\Entity\Endpoint", cascade={"all"})
     * @ORM\JoinColumn(name="endpoint_id", referencedColumnName="id", nullable=true)
     */
    private $endpoint;


    /**
     * Set board
     *
     * @param \stdClass $board
     * @return Physique
     */
    public function setBoard($board)
    {
        $this->board = $board;

        return $this;
    }

    /**
     * Get board
     *
     * @return \stdClass 
     */
    public function getBoard()
    {
        return $this->board;
    }

    /**
     * Set pin
     *
     * @param integer $pin
     * @return Board
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get pin
     *
     * @return integer 
     */
    public function getPin()
    {
        return $this->pin;
    }
    
    /**
     * Set endpoint
     *
     * @param \stdClass $endpoint
     * @return Physique
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * Get endpoint
     *
     * @return \stdClass 
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }
    
    
}
