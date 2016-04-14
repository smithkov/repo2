<?php

namespace project\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LGA
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class LGA
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
    * @ORM\ManyToOne(targetEntity="State", inversedBy="lgas")
    * @ORM\JoinColumn(name="state_id", referencedColumnName="id")
    */ 
    protected $state;

      /**
    * @ORM\OneToMany(targetEntity="User", mappedBy="lga")
    */
    protected $users;
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
     * @return LGA
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
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set state
     *
     * @param \project\AdminBundle\Entity\State $state
     * @return LGA
     */
    public function setState(\project\AdminBundle\Entity\State $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \project\AdminBundle\Entity\State 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Add users
     *
     * @param \project\AdminBundle\Entity\User $users
     * @return LGA
     */
    public function addUser(\project\AdminBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \project\AdminBundle\Entity\User $users
     */
    public function removeUser(\project\AdminBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
