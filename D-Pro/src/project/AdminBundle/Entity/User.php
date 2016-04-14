<?php

namespace project\AdminBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;
    
    /**
     * @var string
     *
     * @ORM\Column(name="bio", nullable=true, type="string", length=300)
     */
    private $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;
    
     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;
    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address",nullable=true, type="string", length=255)
     */
    private $address;

    /**
     * @ORM\OneToOne(targetEntity="AlertSettings")
     */
    protected $alertSettings;
     /**
    * @ORM\ManyToOne(targetEntity="LGA", inversedBy="users")
    * @ORM\JoinColumn(name="lga_id", referencedColumnName="id")
    */ 
    protected $lga;
    
      /**
    * @ORM\ManyToOne(targetEntity="AreaOfSpecialty", inversedBy="users")
    * @ORM\JoinColumn(name="specialty_id", referencedColumnName="id")
    */ 
    protected $specialty;
    
      /**
    * @ORM\ManyToOne(targetEntity="Area", inversedBy="users")
    * @ORM\JoinColumn(name="area_id", referencedColumnName="id")
    */ 
    protected $area;
    
    /**
    * @ORM\ManyToOne(targetEntity="SubscriptionType", inversedBy="users")
    * @ORM\JoinColumn(name="subscription_id", referencedColumnName="id")
    */ 
    protected $subscriptionType;

    /**
    * @ORM\OneToMany(targetEntity="Product", mappedBy="user")
    */
    protected $products;
    
    /**
    * @ORM\OneToMany(targetEntity="RatingComment", mappedBy="user")
    */
    protected $ratings;
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
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set lga
     *
     * @param \project\AdminBundle\Entity\LGA $lga
     * @return User
     */
    public function setLga(\project\AdminBundle\Entity\LGA $lga = null)
    {
        $this->lga = $lga;

        return $this;
    }

    /**
     * Get lga
     *
     * @return \project\AdminBundle\Entity\LGA 
     */
    public function getLga()
    {
        return $this->lga;
    }

    /**
     * Set subArea
     *
     * @param \project\AdminBundle\Entity\SubArea $subArea
     * @return User
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
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set alertSettings
     *
     * @param \project\AdminBundle\Entity\AlertSettings $alertSettings
     * @return User
     */
    public function setAlertSettings(\project\AdminBundle\Entity\AlertSettings $alertSettings = null)
    {
        $this->alertSettings = $alertSettings;

        return $this;
    }

    /**
     * Get alertSettings
     *
     * @return \project\AdminBundle\Entity\AlertSettings 
     */
    public function getAlertSettings()
    {
        return $this->alertSettings;
    }

    /**
     * Set subscriptionType
     *
     * @param \project\AdminBundle\Entity\SubscriptionType $subscriptionType
     * @return User
     */
    public function setSubscriptionType(\project\AdminBundle\Entity\SubscriptionType $subscriptionType = null)
    {
        $this->subscriptionType = $subscriptionType;

        return $this;
    }

    /**
     * Get subscriptionType
     *
     * @return \project\AdminBundle\Entity\SubscriptionType 
     */
    public function getSubscriptionType()
    {
        return $this->subscriptionType;
    }

    /**
     * Add products
     *
     * @param \project\AdminBundle\Entity\Product $products
     * @return User
     */
    public function addProduct(\project\AdminBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \project\AdminBundle\Entity\Product $products
     */
    public function removeProduct(\project\AdminBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set area
     *
     * @param \project\AdminBundle\Entity\Area $area
     * @return User
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
     //File Upload setup
    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/images';
    }

    public function upload()
   {
    // the file property can be empty if the field is not required
    if (null === $this->getFile()) {
        return;
    }

    // use the original file name here but you should
    // sanitize it at least to avoid any security issues

    // move takes the target directory and then the
    // target filename to move to
    $this->getFile()->move(
        $this->getUploadRootDir(),
        $this->getFile()->getClientOriginalName()
    );

    // set the path property to the filename where you've saved the file
    $this->path = $this->getFile()->getClientOriginalName();

    // clean up the file property as you won't need it anymore
    $this->file = null;
}
   /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $file = $this->getAbsolutePath();
        if ($file) {
            unlink($file);
        }
    }


    /**
     * Set path
     *
     * @param string $path
     * @return User
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set specialty
     *
     * @param \project\AdminBundle\Entity\AreaOfSpecialty $specialty
     * @return User
     */
    public function setSpecialty(\project\AdminBundle\Entity\AreaOfSpecialty $specialty = null)
    {
        $this->specialty = $specialty;

        return $this;
    }

    /**
     * Get specialty
     *
     * @return \project\AdminBundle\Entity\AreaOfSpecialty 
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Set bio
     *
     * @param string $bio
     * @return User
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Add ratings
     *
     * @param \project\AdminBundle\Entity\RatingComment $ratings
     * @return User
     */
    public function addRating(\project\AdminBundle\Entity\RatingComment $ratings)
    {
        $this->ratings[] = $ratings;

        return $this;
    }

    /**
     * Remove ratings
     *
     * @param \project\AdminBundle\Entity\RatingComment $ratings
     */
    public function removeRating(\project\AdminBundle\Entity\RatingComment $ratings)
    {
        $this->ratings->removeElement($ratings);
    }

    /**
     * Get ratings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRatings()
    {
        return $this->ratings;
    }
}
