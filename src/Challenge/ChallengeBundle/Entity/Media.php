<?php

namespace Challenge\ChallengeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="Challenge\ChallengeBundle\Repository\MediaRepository")
 */
class Media
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Media
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}

