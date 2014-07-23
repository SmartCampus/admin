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
     * @ORM\Column(name="board", type="object")
     */
    private $board;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="endpoint", type="object")
     */
    private $endpoint;


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
