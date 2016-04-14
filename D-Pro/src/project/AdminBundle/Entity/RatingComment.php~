<?php

namespace project\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RatingComment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RatingComment
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
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


     /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="ratings")
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
     * Set content
     *
     * @param string $content
     * @return RatingComment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return RatingComment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user
     *
     * @param \project\AdminBundle\Entity\User $user
     * @return RatingComment
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
