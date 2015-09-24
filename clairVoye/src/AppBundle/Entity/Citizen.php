<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Citizen
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CitizenRepository")
 */
class Citizen
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
     * @ORM\Column(name="citizen", type="text")
     */
    private $citizen;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;


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
     * Set citizen
     *
     * @param string $citizen
     *
     * @return Citizen
     */
    public function setCitizen($citizen)
    {
        $this->citizen = $citizen;

        return $this;
    }

    /**
     * Get citizen
     *
     * @return string
     */
    public function getCitizen()
    {
        return $this->citizen;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Citizen
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Citizen
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Citizen
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }
}
