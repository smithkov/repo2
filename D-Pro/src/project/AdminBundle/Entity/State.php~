<?php

namespace project\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * State
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class State
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


      /**
    * @ORM\OneToMany(targetEntity="LGA", mappedBy="state")
    */
    protected $lgas;
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
     * Set name
     *
     * @param string $name
     * @return State
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lgas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lgas
     *
     * @param \project\AdminBundle\Entity\LGA $lgas
     * @return State
     */
    public function addLga(\project\AdminBundle\Entity\LGA $lgas)
    {
        $this->lgas[] = $lgas;

        return $this;
    }

    /**
     * Remove lgas
     *
     * @param \project\AdminBundle\Entity\LGA $lgas
     */
    public function removeLga(\project\AdminBundle\Entity\LGA $lgas)
    {
        $this->lgas->removeElement($lgas);
    }

    /**
     * Get lgas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLgas()
    {
        return $this->lgas;
    }
}
