<?php

namespace project\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;

    
    
     /**
    * @ORM\OneToMany(targetEntity="ProductImages", mappedBy="product")
    */
    protected $productImages;
    
     /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="products")
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
     * Set name
     *
     * @param string $name
     * @return Product
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
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    
    /**
     * Set user
     *
     * @param \project\AdminBundle\Entity\User $user
     * @return Product
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productImages = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Add productImages
     *
     * @param \project\AdminBundle\Entity\ProductImage $productImages
     * @return Product
     */
    public function addProductImage(\project\AdminBundle\Entity\ProductImages $productImages)
    {
        $this->productImages[] = $productImages;

        return $this;
    }

    
    

    /**
     * Remove productImages
     *
     * @param \project\AdminBundle\Entity\ProductImage $productImages
     */
    public function removeProductImage(\project\AdminBundle\Entity\ProductImages $productImages)
    {
        $this->productImages->removeElement($productImages);
    }

    /**
     * Get productImages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductImages()
    {
        return $this->productImages;
    }
}
