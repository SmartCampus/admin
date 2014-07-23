<?php

namespace Smart\CampusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Virtuel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Smart\CampusBundle\Entity\VirtuelRepository")
 */
class Virtuel extends Capteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="script", type="string", length=255)
     */
    private $script;


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
     * Set script
     *
     * @param string $script
     * @return Virtuel
     */
    public function setScript($script)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script
     *
     * @return string 
     */
    public function getScript()
    {
        return $this->script;
    }
}
