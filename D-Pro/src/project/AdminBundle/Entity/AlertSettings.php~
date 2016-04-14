<?php

namespace project\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlertSettings
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AlertSettings
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
     * @var boolean
     *
     * @ORM\Column(name="hasLimit", type="boolean")
     */
    private $hasLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="counter", type="integer")
     */
    private $counter;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxTime", type="integer")
     */
    private $maxTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfDay", type="datetime")
     */
    private $dateOfDay;


    /**
     * @ORM\OneToOne(targetEntity="User", inversedBy="information")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    
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
     * Set hasLimit
     *
     * @param boolean $hasLimit
     * @return AlertSettings
     */
    public function setHasLimit($hasLimit)
    {
        $this->hasLimit = $hasLimit;

        return $this;
    }

    /**
     * Get hasLimit
     *
     * @return boolean 
     */
    public function getHasLimit()
    {
        return $this->hasLimit;
    }

    /**
     * Set counter
     *
     * @param integer $counter
     * @return AlertSettings
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;

        return $this;
    }

    /**
     * Get counter
     *
     * @return integer 
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * Set maxTime
     *
     * @param integer $maxTime
     * @return AlertSettings
     */
    public function setMaxTime($maxTime)
    {
        $this->maxTime = $maxTime;

        return $this;
    }

    /**
     * Get maxTime
     *
     * @return integer 
     */
    public function getMaxTime()
    {
        return $this->maxTime;
    }

    /**
     * Set dateOfDay
     *
     * @param \DateTime $dateOfDay
     * @return AlertSettings
     */
    public function setDateOfDay($dateOfDay)
    {
        $this->dateOfDay = $dateOfDay;

        return $this;
    }

    /**
     * Get dateOfDay
     *
     * @return \DateTime 
     */
    public function getDateOfDay()
    {
        return $this->dateOfDay;
    }

    /**
     * Set user
     *
     * @param \project\AdminBundle\Entity\User $user
     * @return AlertSettings
     */
    public function setUser(\project\AdminBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \project\AdminBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
