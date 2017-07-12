<?php

namespace SCBundle\Entity;

/**
 * Recipe
 */
class Recipe
{

    public function __construct()
    {
        $this->dateCreation = new \DateTime();
    }


    /* GENERATED CODE */


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var integer
     */
    private $nbpeople;

    /**
     * @var string
     */
    private $howdo;

    /**
     * @var \DateTime
     */
    private $dateCreation;


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
     * @return Recipe
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
     * Set time
     *
     * @param \DateTime $time
     *
     * @return Recipe
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set nbpeople
     *
     * @param integer $nbpeople
     *
     * @return Recipe
     */
    public function setNbpeople($nbpeople)
    {
        $this->nbpeople = $nbpeople;

        return $this;
    }

    /**
     * Get nbpeople
     *
     * @return integer
     */
    public function getNbpeople()
    {
        return $this->nbpeople;
    }

    /**
     * Set howdo
     *
     * @param string $howdo
     *
     * @return Recipe
     */
    public function setHowdo($howdo)
    {
        $this->howdo = $howdo;

        return $this;
    }

    /**
     * Get howdo
     *
     * @return string
     */
    public function getHowdo()
    {
        return $this->howdo;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Recipe
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}
