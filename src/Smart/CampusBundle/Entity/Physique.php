<?php

namespace Smart\CampusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Physique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Smart\CampusBundle\Entity\PhysiqueRepository")
 * @UniqueEntity("board")
 * @UniqueEntity("endpoint")
 */
class Physique extends Capteur
{
    /**
     * @var \stdClass
     *
     * @ORM\Column(name="board", type="object")
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
     *
     * @ORM\Column(name="endpoint", type="object")
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
