<?php

namespace project\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubArea
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SubArea
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
    * @ORM\ManyToOne(targetEntity="Area", inversedBy="subAreas")
    * @ORM\JoinColumn(name="area_id", referencedColumnName="id")
    */ 
    protected $area;
    
   
    
     /**
    * @ORM\OneToMany(targetEntity="AreaOfSpecialty", mappedBy="subArea")
    */
    protected $areaOfSpecialties;
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
     * @return SubArea
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
     * Set area
     *
     * @param \project\AdminBundle\Entity\Area $area
     * @return SubArea
     */
    public function setArea(\project\AdminBundle\Entity\Area $area = null)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return \project\AdminBundle\Entity\Area 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Add users
     *
     * @param \project\AdminBundle\Entity\User $users
     * @return SubArea
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

    /**
     * Add areaOfSpecialties
     *
     * @param \project\AdminBundle\Entity\AreaOfSpecialty $areaOfSpecialties
     * @return SubArea
     */
    public function addAreaOfSpecialty(\project\AdminBundle\Entity\AreaOfSpecialty $areaOfSpecialties)
    {
        $this->areaOfSpecialties[] = $areaOfSpecialties;

        return $this;
    }

    /**
     * Remove areaOfSpecialties
     *
     * @param \project\AdminBundle\Entity\AreaOfSpecialty $areaOfSpecialties
     */
    public function removeAreaOfSpecialty(\project\AdminBundle\Entity\AreaOfSpecialty $areaOfSpecialties)
    {
        $this->areaOfSpecialties->removeElement($areaOfSpecialties);
    }

    /**
     * Get areaOfSpecialties
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAreaOfSpecialties()
    {
        return $this->areaOfSpecialties;
    }
}
