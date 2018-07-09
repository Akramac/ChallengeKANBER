<?php

namespace Challenge\ChallengeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shops
 *
 * @ORM\Table(name="shops")
 * @ORM\Entity(repositoryClass="Challenge\ChallengeBundle\Repository\ShopsRepository")
 */
class Shops
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
     * @ORM\Column(name="nom", type="string", length=99)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="distance", type="float")
     */
    private $distance;

    /**
     * @var bool
     *
     * @ORM\Column(name="liked", type="boolean")
     */
    private $liked;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var bool
     *
     * @ORM\Column(name="disliked", type="boolean")
     */

    private $disliked;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Shops
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set distance
     *
     * @param float $distance
     *
     * @return Shops
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return float
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set liked
     *
     * @param boolean $liked
     *
     * @return Shops
     */
    public function setLiked($liked)
    {
        $this->liked = $liked;

        return $this;
    }

    /**
     * Get liked
     *
     * @return bool
     */
    public function getLiked()
    {
        return $this->liked;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Shops
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set disliked
     *
     * @param boolean $disliked
     *
     * @return Shops
     */
    public function setDisliked($disliked)
    {
        $this->disliked = $disliked;

        return $this;
    }

    /**
     * Get disliked
     *
     * @return boolean
     */
    public function getDisliked()
    {
        return $this->disliked;
    }
}
