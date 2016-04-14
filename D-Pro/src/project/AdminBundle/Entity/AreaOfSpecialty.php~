<?php

namespace project\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreaOfSpecialty
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AreaOfSpecialty
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
    * @ORM\ManyToOne(targetEntity="SubArea", inversedBy="areaOfSpecialties")
    * @ORM\JoinColumn(name="subarea_id", referencedColumnName="id")
    */ 
    protected $subArea;
    
        /**
    * @ORM\OneToMany(targetEntity="User", mappedBy="areaOfSpecialties")
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
     * @return AreaOfSpecialty
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
     * Set subArea
     *
     * @param \project\AdminBundle\Entity\SubArea $subArea
     * @return AreaOfSpecialty
     */
    public function setSubArea(\project\AdminBundle\Entity\SubArea $subArea = null)
    {
        $this->subArea = $subArea;

        return $this;
    }

    /**
     * Get subArea
     *
     * @return \project\AdminBundle\Entity\SubArea 
     */
    public function getSubArea()
    {
        return $this->subArea;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add users
     *
     * @param \project\AdminBundle\Entity\User $users
     * @return AreaOfSpecialty
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
