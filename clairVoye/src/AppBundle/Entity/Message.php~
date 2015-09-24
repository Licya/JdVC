<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\MessageRepository")
 */
class Message
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="date")
     */
    private $created;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="messages")
     */
    private $person;
    
    /**
     * @ORM\ManyToMany(targetEntity="GoldBook", inversedBy="messages")
     */
    private $goldBooks;

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
     * Set title
     *
     * @param string $title
     *
     * @return Message
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Message
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Message
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Message
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * Set person
     *
     * @param \AppBundle\Entity\Person $person
     *
     * @return Message
     */
    public function setPerson(\AppBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \AppBundle\Entity\Person
     */
    public function getPerson()
    {
        return $this->person;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->goldBooks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add goldBook
     *
     * @param \AppBundle\Entity\GoldBook $goldBook
     *
     * @return Message
     */
    public function addGoldBook(\AppBundle\Entity\GoldBook $goldBook)
    {
        $this->goldBooks[] = $goldBook;

        return $this;
    }

    /**
     * Remove goldBook
     *
     * @param \AppBundle\Entity\GoldBook $goldBook
     */
    public function removeGoldBook(\AppBundle\Entity\GoldBook $goldBook)
    {
        $this->goldBooks->removeElement($goldBook);
    }

    /**
     * Get goldBooks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGoldBooks()
    {
        return $this->goldBooks;
    }
}
