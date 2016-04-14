<?php

namespace project\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Area
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Area
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
    * @ORM\OneToMany(targetEntity="SubArea", mappedBy="area")
    */
    protected $subAreas;
    
        /**
    * @ORM\OneToMany(targetEntity="User", mappedBy="area")
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
     * @return Area
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
        $this->subAreas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add subAreas
     *
     * @param \project\AdminBundle\Entity\SubArea $subAreas
     * @return Area
     */
    public function addSubArea(\project\AdminBundle\Entity\SubArea $subAreas)
    {
        $this->subAreas[] = $subAreas;

        return $this;
    }

    /**
     * Remove subAreas
     *
     * @param \project\AdminBundle\Entity\SubArea $subAreas
     */
    public function removeSubArea(\project\AdminBundle\Entity\SubArea $subAreas)
    {
        $this->subAreas->removeElement($subAreas);
    }

    /**
     * Get subAreas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubAreas()
    {
        return $this->subAreas;
    }

    /**
     * Add users
     *
     * @param \project\AdminBundle\Entity\User $users
     * @return Area
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
